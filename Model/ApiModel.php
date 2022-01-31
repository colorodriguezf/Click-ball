<?php
class ApiModel  {
    private $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_clickballgame;charset=utf8', 'root', '');
    }

function insertarPuntaje($usuario, $puntos) {
    $sentencia = $this->db->prepare("INSERT INTO puntaje(usuario_fk, puntos) VALUES(?,?)");
    $sentencia->execute(array($usuario, $puntos));
    return $this->db->lastInsertId();
}


}
