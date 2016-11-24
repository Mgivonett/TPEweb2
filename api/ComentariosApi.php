<?php
require 'api.php';
include_once('../models/ComentariosModel.php');
include_once('../controllers/UserController.php');

define('ADMIN', 'admin');
define('USER', 'user');
define('ERROR', 'Usuario no autorizado para realizar esta accion');

class ComentariosApi extends Api
{
  private $arrAuth;
  private $model;
  private $userController;

  public function __construct($request)
  {
    parent::__construct($request);
    $this->model = new ComentariosModel();
    $this->userController= new UserController();
    $this->arrAuth=[ADMIN,USER];
  }

  protected function comentarios($argumentos){
    switch ($this->method) {
      case 'GET':
        return $this->model->getComentariosDePelicula($argumentos[0],$this->userController->getLvlAuth()); //$argumentos[0] es el id de la peliculas de la cual traigo los comentarios
        break;                                                                                             //$this->usercontroller->getLvlAuth() esta para habilitar el form de comentarios si esta logueado
      case 'DELETE':
        if($this->userController->getLvlAuth()==ADMIN && count($argumentos)>0){
          $error['Error'] = "el comentario no existe";
          $success['Success'] = "el comentario se borro";
          $filasAfectadas = $this->model->deleteComentario($argumentos[0]);
          return ($filasAfectadas == 1) ? $success : $error;
        }
        break;
      case 'POST':
        if(in_array($this->userController->getLvlAuth(),$this->arrAuth) && count($argumentos) == 0
          && isset($_POST['id_pelicula']) && isset($_POST['id_usuario']) && isset($_POST['comentario']) && isset($_POST['puntuacion'])
          && !empty($_POST['id_pelicula']) && !empty($_POST['id_usuario']) && !empty($_POST['comentario']) && !empty($_POST['puntuacion'])){
          $error['Error'] = "El comentario no se creo";
          $id_comentario = $this->model->createComentario($_POST['id_pelicula'],$_POST['id_usuario'],$_POST['comentario'],$_POST['puntuacion']);
          return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
        }
        return ERROR;
        break;
      default:
        return "ERROR - Metodo invalido";
        break;
    }
  }

}

 ?>
