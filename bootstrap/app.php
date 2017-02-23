<?php

session_start();

// Depencities
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
        'settings' => [
            'displayErrorDetails' => true,
        ]

]);

$app->get('/', function ($request, $response){

    return 'Hello World';

});