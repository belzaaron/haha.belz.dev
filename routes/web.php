<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', 'RandomController@handle');
$router->get('/random', 'RandomController@handle');
