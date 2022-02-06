<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', 'IndexController@handle');
$router->get('/random', 'RandomController@handle');
