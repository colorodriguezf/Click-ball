<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class GameView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showGame() {
        $this->smarty->display('templates/showGame.tpl');
    }
}
