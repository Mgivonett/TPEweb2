<?php
require('controllers/PeliculasController.php');
require ('config/ConfigApp.php');

$controller = new PeliculasController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS:
    $controller->iniciar();
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
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS_X_GENEROS:
    $controller->realizar();//cambiar a mostrar las peliculas segun el genero seleccionado
    break;
  default:
    $controller->iniciar();
    break;
}
?>
