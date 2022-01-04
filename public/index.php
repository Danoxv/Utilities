<?php
define('ROOT', dirname(__FILE__, 2));
 $routs = require_once ROOT . '/src/config/routes.php';
$uri = $_SERVER['REQUEST_URI'];
$uri = strtok($uri, '?');
if (isset($routs[$uri])){
    require_once  ROOT.'/src/'.$routs[$uri];
}else {
   require_once ROOT.'/src/pages/error.php';
}