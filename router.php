<?php

use App\Controllers\ProductsController;
use App\Controllers\UsersController;
use JRN\Router;

$router = new Router();

$router['/user'] = [
    'controller'    => UsersController::class,
    'action'        => 'index'
];

$router['/user/register'] = [
    'controller'    => UsersController::class,
    'action'        => 'create'
];

$router['/product'] = [
    'controller'    => ProductsController::class,
    'action'        => 'index'
];

return $router;