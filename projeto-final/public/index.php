<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName
    ];
}

$routes = [
    '/'=> createRoute(IndexController::class, 'indexAction'),
    '/login'=> createRoute(IndexController::class, 'loginAction'),
    '/produtos'=> createRoute(ProductController::class, 'listAction'),
    '/produtos/novoproduto'=> createRoute(ProductController::class, 'addAction'),
    '/produtos/editarproduto'=> createRoute(ProductController::class, 'editAction'),
    '/categorias'=> createRoute(CategoryController::class, 'listAction'),
    '/categorias/novacategoria'=> createRoute(CategoryController::class, 'addAction'),
    'categorias/editarcategoria'=> createRoute(CategoryController::class, 'editAction')    
];
if (!isset($routes[$url])) {
    (new ErrorController())->notFoundAction();
    exit;
}
$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();
