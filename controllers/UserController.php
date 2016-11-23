<?php
include_once(dirname(__DIR__).'/views/UserView.php');
include_once(dirname(__DIR__).'/models/UserModel.php');

class UserController
{
  private $vista;
  private $modelo;
  private $lvlAuth;

  function __construct()
  {
    $this->modelo = new UserModel();
    $this->vista = new UserView();
    error_reporting(E_ALL ^ E_NOTICE);
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
      if(isset($_POST["user-email"]) && isset($_POST["user-pw"]) && !empty($_POST["user-email"]) && !empty($_POST["user-pw"])){
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
        } else {
          $this->vista->mostrarMensaje("No se pudo ingresar, error de Usuario y/o Clave", "danger");
        }
      }
    }
  }
  
  public function getLvlAuth()
  {
    session_start();
    if(!isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
      return "visitante";
    }

    if($_SESSION['ADMIN']){
      $this->lvlAuth=ADMIN;
      return $this->lvlAuth;
    }
    else {
      $this->lvlAuth=USER;
      return $this->lvlAuth;
    }
    
  }

  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php");
      die();
    }
    else{
      if($_SESSION['ADMIN']){
        $this->lvlAuth=ADMIN;
        return $this->lvlAuth;
      }
      else{ 
        $this->lvlAuth=USER;
        return $this->lvlAuth;}
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
