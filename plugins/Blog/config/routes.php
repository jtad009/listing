<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Blog',
    ['path' => '/blog/'],
    function (RouteBuilder $routes) {
        $routes->connect('articles/:slug', ['controller'=>'articles', 'action' => 'view'],['pass' => ['slug'],]);
    	$routes->connect('articles/tags/*', ['controller'=>'articles', 'action' => 'tags'],['pass' => ['slug'],]);
        $routes->connect('articles/category/*', ['controller'=>'articles', 'action' => 'category'],['pass' => ['slug'],]);
        $routes->connect('/authors/add/', ['controller'=>'users', 'action' => 'add']);
        $routes->connect('/articles/add/', ['controller'=>'articles', 'action' => 'add']);
        $routes->connect('/articles/view/:slug', ['controller' => 'articles', 'action' => 'view'], ['pass'=>['slug']]);
        $routes->connect('/authors/login/', ['controller'=>'users', 'action' => 'login']);
        $routes->connect('/', ['controller' => 'articles', 'action' => 'index']);
        $routes->connect('articles/upload/', ['controller' => 'articles', 'action' => 'upload']);
        // $routes->connect('articles/edit/', ['controller' => 'articles', 'action' => 'edit',]);
       
        $routes->fallbacks(DashedRoute::class);
    }
);
