<?php

session_start();

// Depencities
require __DIR__ . '/../vendor/autoload.php';


$app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true,
        ]

]);

$container = $app->getContainer();

$container['view'] = function ($container) {

    $view = new \Slim\Views\Twig(__DIR__ . '/../ressources/views',[
        'cache' => false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(

            $container->router,
            $container->request->getUri()
    ));

    return $view;

};

$container['home_controller'] = function ($container){
    return new \App\Controllers\home_controller($container);
};

require __DIR__ . '/../app/routes.php';