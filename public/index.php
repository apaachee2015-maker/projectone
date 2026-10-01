<?php

require dirname(__DIR__) . '/config/config.php';
require CONFIG . '/helper_functions.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


        if ($uri === '/')
        {
            require CONTROLLERS . '/index.php';
        }
        elseif ($uri === '/about')
        {
            require CONTROLLERS . '/about.php';
        }
        elseif ($uri === '/create')
        {
            require CONTROLLERS . '/create.php';
        }
        elseif ($uri === '/post')
        {
            require CONTROLLERS . '/post.php';
        }
        else
        {
            abort();
        }



