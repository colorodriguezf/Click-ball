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
            $this->view->showHome($_SESSION['foto_perfil'], $_SESSION['nombre_usuario']);
        }
        else {
            $this->view->showLoginLocation();
        }
    }

    function showGame() {
        $this->view->showGame();
    }
    function showLoginORRegister() {
        $this->view->showLoginORRegister();
    }

}
