<?php
/*require('controllers/PeliculasController.php');
require('controllers/GenerosController.php');*/
require ('config/ConfigApp.php');

/*$controller = new PeliculasController();
$generosController = new GenerosController();*/

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  include_once('controllers/PeliculasController.php');
  $controller = new PeliculasController();
  $controller->iniciar();
  
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->iniciar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULA_SELECCIONADA:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->getPelicula();
    break;
  case ConfigApp::$ACTION_GUARDAR_PELICULA:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_PELICULA:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->eliminar();
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_PELICULA:
    include_once('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->peliculaAEditar();
    break;
  case ConfigApp::$ACTION_EDITAR_PELICULA:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->editar();
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS_X_GENEROS:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->mostrarPeliculasXGenero();//cambiar a mostrar las peliculas segun el genero seleccionado
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_GENEROS:
    include('controllers/GenerosController.php');
    $generosController = new GenerosController();
    $generosController->irAAdministrarGeneros();
    break;
  case ConfigApp::$ACTION_GUARDAR_GENERO:
    include_once('controllers/GenerosController.php');
    $generosController = new GenerosController();
    $generosController->guardarGenero();
    break;
  case ConfigApp::$ACTION_ELIMINAR_GENERO:
    include ('controllers/GenerosController.php');
    $generosController = new GenerosController();
    $generosController->eliminarGenero();
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_GENERO:
    include('controllers/GenerosController.php');
    $generosController = new GenerosController();
    $generosController->irAEditarGenero();//hacer este metodo
    break;
  case ConfigApp::$ACTION_EDITAR_GENERO:
    include('controllers/GenerosController.php');
    $generosController = new GenerosController();
    $generosController->editarGenero();//hacer este metodo
    break;
  default:
    include('controllers/PeliculasController.php');
    $controller = new PeliculasController();
    $controller->iniciar();
    break;
}
?>