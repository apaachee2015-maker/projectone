<?php


$protocol = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";

$host = $_SERVER['HTTP_HOST'];

define("GLB_WWW", $protocol . $host);


define("ROOT", dirname(__DIR__));
define("CONFIG", ROOT . '/config');
define("VIEWS", ROOT . '/views');
define("APP", ROOT . '/app');
define("CORE", APP . '/core');
define("CONTROLLERS", APP . '/controllers');
define("PATH", ROOT . '/public');
define("UPLOAD_IMG", PATH . '/post-images');
define("LCL_WWW", 'http://pless3.loc');

