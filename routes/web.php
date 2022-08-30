<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/show', 'DetailsController@showData');
$router->get('/row', 'DetailsController@selectRow');