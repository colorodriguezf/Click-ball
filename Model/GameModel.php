<?php

class GameModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_clickballgame;charset=utf8', 'root', '');
    }

    function getTop100() {
        $sentencia = $this->db->prepare("SELECT * FROM puntaje ORDER BY puntos DESC LIMIT 100");
        $sentencia->execute();
        $top100= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $top100;
    }


}
