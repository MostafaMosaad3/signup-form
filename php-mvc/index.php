<?php

use Core\Router;
use Core\Request;
require_once 'vendor/autoload.php';
require_once "Core/function.php";

$router = new Router();
Router::load('App/routes.php')->direct(Request::url() , Request::method());