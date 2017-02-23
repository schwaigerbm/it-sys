<?php
namespace App\Controllers;

use Slim\Views\Twig as View;

class home_controller extends controller
{

 
    public function index($request, $response){
        return $this->container->view->render($response, 'home.twig');
    }
}