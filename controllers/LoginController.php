<?php
require_once('views/LoginView.php');
require_once('models/UserModel.php');

class LoginController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new UserModel();
    $this->vista = new LoginView();
  }
  
  function iniciar($error){
    $this->vista->mostrar($error);
  }
  
  public function usuarioLogueado(){
    session_start();
    if(isset($_SESSION['USER'])) {
      $user = $this->modelo->getUser($_SESSION['USER']);
      return $user;
    }
  }
  
  public function validar(){

  }

  public function login(){
    if(!isset($_POST['user-email'])) {
      $this->vista->mostrar([]);
    }
    else {
      $user = $_POST['user-email'];
      $pass = $_POST['user-pw'];
      $pass=md5($pass);
      $usuario = $this->modelo->getUser($user);
      $hash=$usuario["password"];
      if (($pass == $hash) && ($usuario["email"] == $user)) {
        session_start();
        $_SESSION['USER'] = $user;
        $_SESSION['ADMIN'] = $usuario["admin"];
        $this->vista->mostrarMensaje("Usted se logueo correctamente", "success");
        header("Location: principal");

        //die();
      } else {
        $this->vista->mostrarMensaje("No se pudo ingresar, error de Usuario y/o Clave", "danger");
        $this->vista->mostrar(["BAD"]);
      }
    }
  }

  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: ir_a_login");
      die();
    }
    else{
      return true;
    }
  }

  public function logout(){
    session_start();
    session_destroy();
    header("Location: principal");
    die();
  }
  
}

 ?>
