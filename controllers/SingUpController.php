<?php

  include_once('views/LoginView.php');
  require_once('views/UserView.php');
  require_once('models/UserModel.php');

  Class SingUp{

private $modelo;
private $vista;

public function __construct(){

  $this->modelo= new UserModel();
  $this->vista= new UserView();

}

function crearUsuario(){
  print_r ($_POST['password']);

  if(isset($_POST['email'])&&isset($_POST['password'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];
    //$us = $this->model->getUser($user);
   //if($us['email'] != $user)
      $pass = md5($pass);
      print_r ($pass);
      $this->modelo->GuardarUsuario($user,$pass);
      $msj = "El usuario se creo correctamente!";
    }
    else{
      $msj = "El usuario ya existe!";
    }
    $this->vista->mostrarForm($msj);

  }

}

 ?>
