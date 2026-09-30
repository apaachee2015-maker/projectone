<?php

require dirname(__DIR__) . '/config/config.php';
require CONFIG . '/helper_functions.php';
dump(GLOBAL_WWW);
dump($_SERVER['SERVER_PORT']);
dump($_SERVER['REQUEST_URI']);
dump($protocol);
dd($host);

var_dump(CONFIG);
var_dump(LOCAL_WWW);
var_dump(CONTROLLERS);
var_dump(PATH);


echo  "The Request has Come !";
