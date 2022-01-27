<?php
class UserModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_clickballgame;charset=utf8', 'root', '');
    }

    function createUser($correo, $nombre_usuario, $nickname, $password, $foto_perfil=null) {
        $pathImg = null;
        if ($foto_perfil) {
            $pathImg = $this->uploadImage($foto_perfil);
            $sentencia = $this->db->prepare("INSERT INTO users(username, password, correo, profilePhoto, nickname) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre_usuario, $password, $correo, $pathImg, $nickname));
        }
    }

    private function uploadImage($foto_perfil) {
        $target = 'img/fotoPerfil/' . uniqid() . '.jpg';
        move_uploaded_file($foto_perfil, $target);
        return $target;
    }

    function checkUserFromDB($username) {
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE username=?");
        $sentencia->execute([$username]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}