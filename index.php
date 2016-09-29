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
  case ConfigApp::$ACTION_REALIZAR_PELICULA:
    $controller->realizar();
    break;
  default:
    $controller->iniciar();
    break;
}
?>
