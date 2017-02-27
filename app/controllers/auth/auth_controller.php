<?php
namespace App\Controllers\auth;


use Slim\Views\Twig as View;
use App\Controllers\Controller;
use App\Models\users;

class auth_controller extends controller
{

    public function get_signup($request, $response){

        return $this->container->view->render($response, 'auth/signup.twig');

    }

    public function post_signup($request, $response){

            users::create([
                'username' => $request->getParam('username'),
                'email' => $request->getParam('email'),
                'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
            ]);


            return $this->container->view->render($response, 'home.twig');

            
        
            }
  
}