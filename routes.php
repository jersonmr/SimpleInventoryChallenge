<?php

$router->get('/', 'home');
$router->get('/products', 'products/index');
$router->get('/products/create', 'products/create',);
$router->post('/products/store', 'products/store');
$router->delete('/products/delete', 'products/delete');

//dd($router->routes);
