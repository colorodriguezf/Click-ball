<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class GameView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showGame($nombre_usuario="") {
        $this->smarty->assign('nombre_usuario', $nombre_usuario);
        $this->smarty->display('templates/showGame.tpl');
    }
    function showHome($foto_perfil="", $nombre_usuario="") {
        $this->smarty->assign('foto_perfil', $foto_perfil);
        $this->smarty->assign('nombre_usuario', $nombre_usuario);
        $this->smarty->display('templates/home.tpl');
    }

    function showLoginORRegister($error ="") {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/showLoginORRegister.tpl');
    }
     function showLoginLocation() {
        header("Location: " . BASE_URL . "");
     }
     function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
     }
}
