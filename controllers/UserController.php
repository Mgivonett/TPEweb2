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

  function IrAdminsConfig(){
    $usuarios = $this->modelo->getUsers();
    $admins = $this->modelo->getAdministradores();
    $this->vista->IrAdminsConfig($usuarios,$admins);
  }

  function editarUsuario(){
    if($this->getLvlAuth() == ADMIN){
      $user = $_POST["USER"];
      $this->modelo->editarUsuario($user);
    }
  }
  
  function administrarUsuarios(){
    if(isset($_POST['admin'])&& !empty($_POST['admin'])){
      $adminsUI=$_POST['admin'];
      $arrAdminsDB= $this->modelo->getAdministradores();
      foreach ($adminsUI as $adminUI){
        if(!in_array($adminUI,$arrAdminsDB))
          $this->modelo->editarUsuario($adminUI);
      }
      foreach ($arrAdminsDB as $adminDB){
        if(!in_array($adminDB,$adminsUI))
          $this->modelo->editarUsuario($adminDB);
      }
    }
  }

  function createUsuario(){
    if(isset($_POST['email'])&&isset($_POST['password']) &&($_POST['password']==$_POST['password2'])){
      $user = $_POST['email'];
      $pass = $_POST['password'];
      $pass = md5($pass);
      $this->modelo->GuardarUsuario($user,$pass);
      $this->vista->mostrarMensaje("El usuario se creo correctamente!","success");
    }
    else if(isset($_POST['email'])&&isset($_POST['password']) &&($_POST['password']!=$_POST['password2'])){
      $this->vista->mostrarMensaje("Las contraseñas no son iguales!","danger");
    }
    else{
      $this->vista->mostrarMensaje("El usuario ya existe!","danger");
    }
  }
  
}

 ?>
