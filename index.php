<?php
include_once('controllers/PeliculasController.php');
include_once('controllers/GenerosController.php');
include_once('controllers/UserController.php');
require_once ('config/ConfigApp.php');

define('ADMIN', 'admin');
define('USER', 'user');

$generosController = new GenerosController();
$userController= new UserController();
$controller = new PeliculasController($generosController,$userController);

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
    if($userController->checkLogin() == ADMIN) {
      $controller->guardar();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_PELICULA:
    if($userController->checkLogin()== ADMIN) {
      $controller->eliminar();
    }
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_PELICULA:
    if($userController->checkLogin()== ADMIN) {
      $controller->peliculaAEditar();
    }
    break;
  case ConfigApp::$ACTION_EDITAR_PELICULA:
    if($userController->checkLogin()== ADMIN) {
      $controller->editar();
    }
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS_X_GENERO:
    $controller->mostrarPeliculasXGenero();
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_GENEROS:
    if($userController->checkLogin()== ADMIN) {
      $generosController->irAAdministrarGeneros();
    }
    break;
  case ConfigApp::$ACTION_GUARDAR_GENERO:
    if($userController->checkLogin()== ADMIN) {
      $generosController->guardarGenero();
    }
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_GENERO:
    if($userController->checkLogin()== ADMIN) {
      $generosController->generoAEditar();
    }
    break;
  case ConfigApp::$ACTION_EDITAR_GENERO:
    if($userController->checkLogin()== ADMIN) {
      $generosController->editarGenero();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_GENERO:
    if($userController->checkLogin()== ADMIN) {
      $generosController->eliminarGenero();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
    if($userController->checkLogin()== ADMIN) {
      $controller->eliminarImagen();
    }
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_PELICULAS:
    if($userController->checkLogin()== ADMIN) {
      $controller->irAAdministradorDePeliculas();
    }
    break;
  case ConfigApp::$ACTION_HOME:
    $controller->mostrarVistaPeliculas();
    break;
  case ConfigApp::$ACTION_IR_A_LOGIN:
    $userController->iniciar([]);
    break;
  case ConfigApp::$ACTION_LOGIN:
    $controller->login();
    break;
  case ConfigApp::$ACTION_LOGOUT:
    $userController->logout();
    break;
  case ConfigApp::$ACTION_PRINCIPAL:
    $controller->mostrarPrincipal();
    break;
  default:
    $controller->iniciar();
    break;
}

?>

