<?php


$app->get('/', 'home_controller:index')->setName('home');

$app->get('/auth/signup', 'auth_controller:get_signup')->setName("auth.signup");
$app->post('/auth/signup', 'auth_controller:post_signup');