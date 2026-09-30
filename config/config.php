<?php


$protocol = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";

$host = $_SERVER['HTTP_HOST'];

define("GLOBAL_WWW", $protocol . $host);


define("ROOT", dirname(__DIR__));
define("CONFIG", ROOT . '/config');
define("VIEWS", ROOT . '/views');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("PATH", ROOT . '/public');
define("LOCAL_WWW", 'http://pless3.loc');

