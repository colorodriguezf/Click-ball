<?php

require_once 'libs\smarty-3.1.39\Router.php';
require_once 'Controller/GameController.php';
require_once 'Controller/UserController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

$router->setDefaultRoute('GameController','showLoginORRegister');

$router->addRoute('home', 'GET', 'GameController', 'showHome');
$router->addRoute('play', 'GET', 'GameController', 'showGame');

$router->addRoute('login', 'POST', 'UserController', 'userRegister');
$router->addRoute('verify', 'POST', 'UserController', 'verifyLogin');
$router->addRoute('logout', 'GET', 'UserController', 'logout');








$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);