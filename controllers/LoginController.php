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
  
  public function validar(){

  }

  public function login(){
    if(!isset($_REQUEST['user-email'])) {
      echo "LPM";
      $this->vista->mostrar([]);
    }
    else {
      $user = $_REQUEST['user-email'];
      $pass = $_REQUEST['user-pw'];
      $pass=md5($pass);
      $hash = $this->modelo->getUser($user)["password"];
      print_r($hash);
      //TODO: falta controlar el caso de que el usuario no exista
      if(password_verify($pass, $hash))
      {
        session_start();
        $_SESSION['USER'] = $user;
        header("Location: ir_a_administrar_peliculas");
        die();
      }
      else
      {
        $this->vista->mostrar(["BAD"]);
      }

    }
  }

  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php");
      die();
    };
  }

  public function logout(){
    session_start();
    session_destroy();
    header("Location: login");
    die();
  }

}

 ?>
