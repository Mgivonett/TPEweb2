<?php
include_once('controllers/PeliculasController.php');
include_once('controllers/GenerosController.php');
include_once('controllers/LoginController.php');
require_once ('config/ConfigApp.php');

$generosController = new GenerosController();
$loginController= new LoginController();
$controller = new PeliculasController($generosController,$loginController);

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS:
    $controller->iniciar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULA_SELECCIONADA:
    $controller->getPelicula();
    break;
  case ConfigApp::$ACTION_GUARDAR_PELICULA:
    if($loginController->checkLogin()) {
      $controller->guardar();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_PELICULA:
    if($loginController->checkLogin()) {
      $controller->eliminar();
    }
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_PELICULA:
    if($loginController->checkLogin()) {
      $controller->peliculaAEditar();
    }
    break;
  case ConfigApp::$ACTION_EDITAR_PELICULA:
    if($loginController->checkLogin()) {
      $controller->editar();
    }
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS_X_GENERO:
    $controller->mostrarPeliculasXGenero();
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_GENEROS:
    if($loginController->checkLogin()) {
      $generosController->irAAdministrarGeneros();
    }
    break;
  case ConfigApp::$ACTION_GUARDAR_GENERO:
    if($loginController->checkLogin()) {
      $generosController->guardarGenero();
    }
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_GENERO:
    if($loginController->checkLogin()) {
      $generosController->generoAEditar();
    }
    break;
  case ConfigApp::$ACTION_EDITAR_GENERO:
    if($loginController->checkLogin()) {
      $generosController->editarGenero();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_GENERO:
    if($loginController->checkLogin()) {
      $generosController->eliminarGenero();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
    if($loginController->checkLogin()) {
      $controller->eliminarImagen();
    }
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_PELICULAS:
    if($loginController->checkLogin()) {
      $controller->irAAdministradorDePeliculas();
    }
    break;
  case ConfigApp::$ACTION_HOME:
    $controller->mostrarVistaPeliculas();
    break;
  case ConfigApp::$ACTION_IR_A_LOGIN:
    $loginController->iniciar([]);
    break;
  case ConfigApp::$ACTION_LOGIN:
    $controller->login();
    break;
  case ConfigApp::$ACTION_LOGOUT:
    $loginController->logout();
    break;
  case ConfigApp::$ACTION_PRINCIPAL:
    $controller->mostrarPrincipal();
    break;
  default:
    $controller->iniciar();
    break;
}

?>

