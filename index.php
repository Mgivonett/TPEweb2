<?php
include_once('controllers/PeliculasController.php');
include_once('controllers/GenerosController.php');
include_once('controllers/LoginController.php');
include_once ('controllers/SingUpController.php');
require_once ('config/ConfigApp.php');

$generosController = new GenerosController();
$loginController= new LoginController();
$SingUpController = new SingUp();

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
  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
    $controller->eliminarImagen();
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_PELICULAS:
    $controller->irAAdministradorDePeliculas();
    break;
  case ConfigApp::$ACTION_HOME:
    $controller->mostrarVistaPeliculas();
    break;
  case ConfigApp::$ACTION_IR_A_LOGIN:
    $loginController->iniciar([]);
    break;
  case ConfigApp::$ACTION_LOGIN:
    $loginController->login();
    break;
  case ConfigApp::$ACTION_LOGOUT:
    $loginController->logout();
    break;
  case ConfigApp::$ACTION_SINGUP:
    $SingUpController->crearUsuario();
  case ConfigApp::$ACTION_PRINCIPAL:
    $controller->mostrarPrincipal();
    break;
  default:
    $controller->iniciar();
    break;
}

?>
