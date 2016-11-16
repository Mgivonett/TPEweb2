<?php
include('controllers/PeliculasController.php');
include('controllers/GenerosController.php');
include('controllers/LoginController.php');
require ('config/ConfigApp.php');

$generosController = new GenerosController();
$controller = new PeliculasController($generosController);
$loginController= new LoginController();

/*if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $loginController->iniciar("sarasa");
  
  die();
}*/

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS:
    $controller->iniciar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULA_SELECCIONADA:
    $controller->getPelicula();
    break;
  case ConfigApp::$ACTION_GUARDAR_PELICULA:
    $controller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_PELICULA:
    $controller->eliminar();
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_PELICULA:
    $controller->peliculaAEditar();
    break;
  case ConfigApp::$ACTION_EDITAR_PELICULA:
    $controller->editar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS_X_GENERO:
    $controller->mostrarPeliculasXGenero();
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_GENEROS:
    $generosController->irAAdministrarGeneros();
    break;
  case ConfigApp::$ACTION_GUARDAR_GENERO:
    $generosController->guardarGenero();
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_GENERO:
    $generosController->generoAEditar();
    break;
  case ConfigApp::$ACTION_EDITAR_GENERO:
    $generosController->editarGenero();
    break;
  case ConfigApp::$ACTION_ELIMINAR_GENERO:
    $generosController->eliminarGenero();
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_PELICULAS:
    $controller->irAAdministradorDePeliculas();
    break;
  case ConfigApp::$ACTION_HOME:
    $controller->mostrarVistaPeliculas();
    break;
  case ConfigApp::$ACTION_LOGIN:
    $controller->irAAdministradorDePeliculas();
    break;
  default:

    $loginController->iniciar("sarasa");
    break;
}

?>

