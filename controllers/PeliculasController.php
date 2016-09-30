<?php
require('views/PeliculasView.php');
require('models/PeliculasModel.php');

class PeliculasController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new PeliculasModel();
    $this->vista = new PeliculasView();
  }

  function iniciar(){
    $peliculas = $this->modelo->getPeliculas();
    $this->vista->mostrar($peliculas);
  }

  function getImagenVerificada($imagen){
      if($imagen['size']>0 && $imagen['type']=="image/jpeg"){
          return $imagen;
      }
  }

  function guardar(){
    $titulo = $_POST['titulo'];
    $link = $_POST['link'];
    $descripcion = $_POST['descripcion'];
    $generos = $_POST['generos'];
    if(isset($_FILES['imagen'])){
      $imagenVerificada = $this->getImagenVerificada($_FILES['imagen']);
      if(count($imagenVerificada)>0){
        $this->modelo->crearPelicula($titulo,$link,$descripcion,$imagenVerificada,$generos);
        $this->vista->mostrarMensaje("La pelicula se creo con imagen y todo!", "success");
      }
      else{
        $this->vista->mostrarMensaje("Error con las imagenes", "danger");
      }
    }
    else{
        $this->vista->mostrarMensaje("La imagen es requerida","danger");
    }

    $this->iniciar();
  }

  function eliminar(){
    $key = $_GET['id_tarea'];
    $this->modelo->eliminarTarea($key);
    $tareas = $this->modelo->getTareas();
    $this->vista->getLista($tareas);
  }

  function realizar(){
    $key = $_GET['id_tarea'];
    $this->modelo->toogleTarea($key);
    $this->iniciar();
  }

  function filtro($pelicula){
    return preg_match('/podria/',$pelicula);
  }


}

 ?>
