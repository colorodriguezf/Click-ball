<?php

require_once "Model/UserModel.php";
require_once "View/UserView.php";
require_once "View/GameView.php";

class UserController {

    private $model;
    private $view;
    private $gameView;

    function __construct() {
        $this->model= new UserModel();
        $this->view = new UserView();
        $this->gameView = new GameView();
    }
    function userRegister(){
        if (!empty($_POST['correo']) && !empty($_POST['nickname']) && !empty($_POST['nombre_usuario']) && !empty($_POST['password']) && !empty($_FILES['input_name']['type'])) {
                    if ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || 
                    $_FILES['input_name']['type'] == "image/png") {
                        $correo = $_POST['correo'];
                        $nickname=$_POST['nickname'];
                        $nombre_usuario = $_POST['nombre_usuario'];
                        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                        $foto_perfil = $_FILES['input_name']['tmp_name'];
                  }
                  $this->model->createUser($correo, $nombre_usuario, $nickname, $password, $foto_perfil);
        }
        $this->view->showLoginLocation();
      }
    
      function verifyLogin()  {
        if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
          $usuario = $_POST['usuario'];
          $password = $_POST['password'];
          $user = $this->model->checkUserFromDB($usuario);
    
          if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['logueado']=true;
            $_SESSION['correo']= $user->correo;
            $_SESSION['nombre_usuario']=$user->username;
            $_SESSION['foto_perfil']=$user->profilePhoto;
            $_SESSION['nickname']=$user->nickname;
            $_SESSION['user_id']=$user->id;
          }
          if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {
            $this->gameView->showHomeLocation();
          }
          else {
            $this->gameView->showLoginORRegister("usuario o contraseña incorrectos");
          }
        } 
      }
    
      function logout() {
        session_start();
        session_destroy();
        $this->gameView->showLoginORRegister();
      }
      
    }