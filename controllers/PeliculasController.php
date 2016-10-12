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
  
  function actualizarLista(){
    $peliculas = $this->modelo->getPeliculas();
    $this->vista->getLista($peliculas);
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
      if((count($imagenVerificada)>0) && (count($generos)>0)){
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
    $this->actualizarLista();
  }

  function eliminar(){
    $key = $_GET['id_pelicula'];
    $this->modelo->eliminarPelicula($key);
    $peliculas = $this->modelo->getPeliculas();
    $this->vista->getLista($peliculas);
  }

  function peliculaAEditar(){
    $key = $_GET['id_pelicula'];
    $pelicula=$this->modelo->getPeliculaXId($key);
    $this->vista->mostrarPelicula($pelicula);
  }

  function mostrarVistaPeliculas(){
    $this->vista->mostrarMensaje("La pelicula se edito con exito!", "success");
    $peliculas = $this->modelo->getPeliculas();
    $this->vista->mostrarPrincipal($peliculas);
  }

  function editar(){
    $id_pelicula=$_POST['id_pelicula'];
    $titulo = $_POST['titulo'];
    $link = $_POST['link'];
    $descripcion = $_POST['descripcion'];
    $generos = $_POST['generos'];
    if(!empty($_FILES['imagen']['name'])){  //si se agrego una imagen al formulalrio para cambiar la actual
      $imagenVerificada = $this->getImagenVerificada($_FILES['imagen']);
      if((count($imagenVerificada)>0) && (count($generos)>0)){
        $pelicula=$this->modelo->getPeliculaXId($id_pelicula);
        $this->modelo->desvincularImgAnterior($pelicula['imagen']);
        $imagen=$this->modelo->imagenUpload($imagenVerificada);
        $this->modelo->editarPelicula($titulo,$link,$descripcion,$imagen,$generos,$id_pelicula);
        $this->mostrarVistaPeliculas();
      }
      else if(count($generos)>0){ //pelicula editada, pero conservando la imagen anterior porque no paso la verificacion
        $this->modelo->editarPeliculaSinImagen($titulo,$link,$descripcion,$generos,$id_pelicula);
        $this->mostrarVistaPeliculas();
      }
    }
    else {
      if(count($generos)>0){//pelicula editada, pero conservando la imagen anterior porque no se agrego al formulario
        $this->modelo->editarPeliculaSinImagen($titulo,$link,$descripcion,$generos,$id_pelicula);
        $this->mostrarVistaPeliculas();
      }
      else{
      $this->vista->mostrarMensaje("Error con los generos", "danger");
      }
    } 
  }

  function getPelicula(){
    $id_pelicula=$_GET['id_pelicula'];
    $pelicula=$this->modelo->getPeliculaXId($id_pelicula);
    $this->vista->getPelicula($pelicula);
  }

  function mostrarPeliculasXGenero(){

  }
}
 ?>
