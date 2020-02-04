<?php

require __DIR__ . '/vendor/autoload.php';

/**
 * @var $router \JRN\Router
 */
$router = require __DIR__ . '/router.php';

/**
 * @var $resolver \JRN\Resolver
 */
$resolver = require __DIR__ . '/resolver.php';

$class = $router->handler();
$resolver->handler($class['controller'], $class['action']);