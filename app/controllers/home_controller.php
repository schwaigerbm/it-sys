<?php
namespace App\Controllers;

use Slim\Views\Twig as View;

class home_controller extends controller
{

 
    public function index($request, $response){
        
        $user = $this->container->db->table('users')->find(1);

        var_dump($user->email);
        
        die();
        return $this->container->view->render($response, 'home.twig');
    }
}