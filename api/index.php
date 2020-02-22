<?php

    require __DIR__ . '/vendor/autoload.php';

    use CoffeeCode\Router\Router;

    $router = new Router(ROOT);

    /*
        Controllers
    */

    $router->namespace('Source\controllers');

    /*
        Snacks
    */

    $router->get('/snacks', 'SnackController:getSnacks');
    $router->get('/snacks/categories', 'SnackCategoryController:getCategories');

    /*
        Cities
    */

    $router->get('/cities', 'CityController:getCities');

    /* 
        Dispatch
    */

    $router->dispatch();

    if($router->error()){
        echo $router->error();
    }