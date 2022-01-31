<?php

require_once "Model/ApiModel.php";
require_once "View/ApiView.php";
require_once "./Helpers/AuthHelper.php";

class ApiController {

    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model= new ApiModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
}

function enviarPuntaje($params = null){
    $logueado = $this->authHelper->checkLogedIn();
    // if ($logueado){
        $body = $this->getBody();
        $ultimoId = $this->model->insertarPuntaje($body->usuario_fk, $body->puntos);
        if ($ultimoId) {
            $this->view->response("Puntaje añadido con exito. El puntaje para $body->usuario_fk tendra el id= $ultimoId", 200);
        } else {
            $this->view->response("El puntaje no se pudo insertar", 500);
        }
    // }
}

// Devuelve el body del request
private function getBody() {
    //trae lo que le mandaron en el body
    $bodyString = file_get_contents("php://input");
    //te devuelve el string en tipo objeto
    return json_decode($bodyString);
}







}
