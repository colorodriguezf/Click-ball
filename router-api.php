
<?php

require_once 'libs/smarty-3.1.39/Router.php';
require_once "Controller/ApiController.php";



$router = new router();

$router->addRoute('puntaje','POST','ApiController','enviarPuntaje'); 

$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);