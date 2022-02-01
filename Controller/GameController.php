<?php

require_once "Model/GameModel.php";
require_once "View/GameView.php";
require_once "./Helpers/AuthHelper.php";

class GameController {

    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model= new GameModel();
        $this->view = new GameView();
        $this->authHelper = new AuthHelper();
    }
    function showHome() {
        $logueado = $this->authHelper->checkLogedIn();
        if($logueado) {
            $top100= $this->model->getTop100();
            $this->view->showHome($_SESSION['foto_perfil'], $_SESSION['nombre_usuario'], $top100);
        }
        else {
            $this->view->showLoginLocation();
        }
    }
    
    function showGame() {
        $logueado = $this->authHelper->checkLogedIn();
        if($logueado) {
            $this->view->showGame($_SESSION['nombre_usuario']);
        }
        else {
            $this->view->showLoginLocation();
        }
    }
    function showLoginORRegister() {
        $top100= $this->model->getTop100();
        $this->view->showLoginORRegister($top100);
    }

}