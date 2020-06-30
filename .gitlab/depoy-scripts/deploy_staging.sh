#!/usr/bin/env bash
FULL_GIT_URL=https://oauth2:go3hy5dL8znZCA2e_Zia@gitlab.com/webcoupers_/doubble.git
APP_DIR=doubble-develop
BRANCH=develop
COMPOSER_ENV="composer set-dev-env"
LOG_FILE="$HOME/deploy-logs/doubble-develop.log"

case $DEPLOY_ENV in

  develop | development)
    APP_DIR=doubble-develop
    BRANCH=develop
    LOG_FILE="$HOME/deploy-logs/doubble-develop.log"
    echo
    ;;

  staging)
    APP_DIR=doubble
    BRANCH=staging
    COMPOSER_ENV="composer set-staging-env"
    LOG_FILE="$HOME/deploy-logs/doubble-staging.log"
    ;;

  *)
    echo ">>Unknown environment, defaulting to develop"
    ;;
esac

[ ! -f "$LOG_FILE" ] && mkdir -p "$HOME/deploy-logs" && touch "$LOG_FILE"

if [ -f "$LOG_FILE" ]; then
    exec 3>&1 4>&2
    trap 'exec 2>&4 1>&3' 0 1 2 3
    exec 1>"$LOG_FILE" 2>&1
fi

run_deploy() {
    echo ">> $(date) : Changing directory to $APP_DIR"
    cd "$HOME/$APP_DIR" || exit
    echo ">> $(date) : Checking out to branch $BRANCH"
    git checkout $BRANCH
    git reset --hard HEAD
    echo ">> $(date) : Pulling latest update from remote branch $BRANCH"
    git pull $FULL_GIT_URL $BRANCH
    echo ">> $(date) : Copying composer file..."
    cp composer-deploy.json composer.json
    echo ">> $(date) : Installing dependencies..."
    composer install
    eval $COMPOSER_ENV
    echo ">> $(date) : Running migration..."
    composer db-migrate
    echo ">> $(date) : Seeding..."
    composer db-seed
}

git_clone() {
    echo ">> $(date) : Cloning fresh repository..."
    git clone $FULL_GIT_URL "$HOME/$APP_DIR"
    if [ -d "$APP_DIR/.git" ]; then
        echo ">> $(date) : Successfull clone $APP_DIR"
        run_deploy pull
    else
        echo ">> $(date) : Error occurred, could not clone $APP_DIR, Exiting..."
        exit
    fi
}

start_deploy() {
    echo ">> $(date) : Checking if directory '$APP_DIR' exists..."
    if [ -d "$APP_DIR" ]; then
        if [ -d "$APP_DIR/.git" ]; then
            echo ">> $(date) : Directory exists and it is a git repository"
            run_deploy
        else
            echo ">> $(date) : Directory exists but not a git repository"
            echo ">> $(date) : Removing directory..."
            rm -rf $APP_DIR
            git_clone
        fi
    else
        echo ">> $(date) : Directory does not exist"
        git_clone
    fi
}

start_deploy
