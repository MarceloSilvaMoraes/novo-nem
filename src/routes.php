<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/', 'HomeController@index');
$router->post('/sem_online', 'HomeController@sem_online');
$router->post('/semi', 'HomeController@semi');
