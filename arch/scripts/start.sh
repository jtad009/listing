#!/usr/bin/env bash
echo ">>Starting Doubble..."
echo "APP_ENV: $APP_ENV"

composer install

if [[ "$APP_ENV" = "testing" ]]
then
  composer set-test-dev
  composer check
fi