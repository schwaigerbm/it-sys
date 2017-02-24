<?php
namespace App\Controllers\auth;


use Slim\Views\Twig as View;
use App\Controllers\Controller;

class auth_controller extends controller
{

    public function get_signup($request, $response){

        return $this->container->view->render($response, 'auth/signup.twig');

    }

    public function post_signup(){

    }
  
}