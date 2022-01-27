<?php

require_once "Model/GameModel.php";
require_once "View/GameView.php";

class GameController {

    private $model;
    private $view;

    function __construct() {
        $this->model= new GameModel();
        $this->view = new GameView();
    }

    function showHome() {
        $this->view->showGame();
    }
    function showLoginORRegister() {
        $this->view->showLoginORRegister();
    }

}
