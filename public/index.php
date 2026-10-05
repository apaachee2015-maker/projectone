<?php

    require '../vendor/autoload.php';
    use Myfrm\Db;
    require dirname(__DIR__) . '/config/config.php';
    require CONFIG . '/helper_functions.php';

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = require CONFIG . '/routes.php';


    if (array_key_exists($uri, $routes))
    {

        require CONTROLLERS . "/{$routes[$uri]}";
    }
    else
    {
       abort();
    }





