<?php
include_once('controllers/PeliculasController.php');
include_once('controllers/GenerosController.php');
include_once('controllers/UserController.php');
require_once ('config/ConfigApp.php');

define('ADMIN', 'admin');
define('USER', 'user');
define('VISITANTE', 'visitante');
define('ERROR_AUTORIZACION','El usuario no tiene los permisos necesarios para realizar esta accion');
define('DANGER','danger');
define('SUCCESS','success');

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
    if($userController->getLvlAuth() == ADMIN) {
      $controller->guardar();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_PELICULA:
    if($userController->getLvlAuth()== ADMIN) {
      $controller->eliminar();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_PELICULA:
    if($userController->getLvlAuth()== ADMIN) {
      $controller->peliculaAEditar();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_EDITAR_PELICULA:
    if($userController->getLvlAuth()== ADMIN) {
      $controller->editar();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_MOSTRAR_PELICULAS_X_GENERO:
    $controller->mostrarPeliculasXGenero();
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_GENEROS:
    if($userController->getLvlAuth()== ADMIN) {
      $generosController->irAAdministrarGeneros();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_GUARDAR_GENERO:
    if($userController->getLvlAuth()== ADMIN) {
      $generosController->guardarGenero();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_IR_A_EDITAR_GENERO:
    if($userController->getLvlAuth()== ADMIN) {
      $generosController->generoAEditar();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_EDITAR_GENERO:
    if($userController->getLvlAuth()== ADMIN) {
      $generosController->editarGenero();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_GENERO:
    if($userController->getLvlAuth()== ADMIN) {
      $generosController->eliminarGenero();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_ELIMINAR_IMAGEN:
    if($userController->getLvlAuth()== ADMIN) {
      $controller->eliminarImagen();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_IR_A_ADMINISTRAR_PELICULAS:
    if($userController->getLvlAuth()== ADMIN) {
      $controller->irAAdministradorDePeliculas();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_HOME:
    $controller->mostrarVistaPeliculas();
    break;
  case ConfigApp::$ACTION_IR_ADMINS_CONFIG:
    if($userController->getLvlAuth()== ADMIN) {
      $userController->IrAdminsConfig();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_IR_ADMINISTRAR_USUARIOS:
    if($userController->getLvlAuth()== ADMIN) {
      $userController->administrarUsuarios();
      $controller->mostrarPrincipal();
    }
    else{
      $controller->getVista()->mostrarMensaje(ERROR_AUTORIZACION,DANGER);
      $controller->iniciar();
    }
    break;
  case ConfigApp::$ACTION_IR_A_LOGIN:
      $userController->iniciar([]);
    break;
  case ConfigApp::$ACTION_LOGIN:
    $userController->login();
    $controller->mostrarPrincipal();
    break;
  case ConfigApp::$ACTION_LOGOUT:
    $userController->logout();
    $controller->mostrarPrincipal();
    break;
  case ConfigApp::$ACTION_SIGNUP:
    $userController->createUsuario();
    $controller->mostrarPrincipal();
    break;
  case ConfigApp::$ACTION_PRINCIPAL:
    $controller->mostrarPrincipal();
    break;
  default:
    $controller->iniciar();
    break;
}

?>
