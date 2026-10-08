<?php

    require '../vendor/autoload.php';
    use Myfrm\Db;
    require dirname(__DIR__) . '/config/config.php';
    require CONFIG . '/helper_functions.php';


  $db = Db::getInstance();

  require CORE . '/router.php';



//
//   dd($db);





