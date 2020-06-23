<?php

namespace Blog\Controller;

use Cake\Controller\Controller as BaseController;
use Cake\Event\Event;

class AppController extends BaseController
{
    public function beforeRender(event $event)
    {
        $this->SkoleUtil->setCorsHeaders();
    }

    public function beforeFilter(Event $event)
    {

        if ($this->request->is('options')) {
            $this->SkoleUtil->setCorsHeaders();
            return $this->response;
        }
        $this->Auth->allow(['articles.index', 'authors.add', 'categories.index', 'subscriptions.add']);

        return parent::beforeFilter($event);
    }
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('defaults');
        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false
        ]);
        $this->loadComponent('Upload');
        $this->loadComponent('SkoleUtil');
        $this->loadComponent('Flash');
        $this->loadComponent('MailChimp');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'plugin' => 'Blog'
            ],
            'authError' => 'Authentication Error.',
            'authenticate' => [

                'Form' => [

                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ],

                ],
            ],
            'storage' => 'Session',
            'unauthorizedRedirect' => false
        ]);

        $this->getArticlesSlugs();
    }
    public function getArticlesSlugs()
    {
        $articles =  \Cake\Datasource\ConnectionManager::get('blog')->execute('SELECT slug from articles LIMIT 50')->fetchAll();
        $data = array_map(function ($article) {
            return $article[0];
        }, $articles);
        $this->set('slugs', implode(',', $data));
    }
}
