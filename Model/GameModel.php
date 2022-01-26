<?php

class GameModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_clickballgame;charset=utf8', 'root', '');
    }


}
