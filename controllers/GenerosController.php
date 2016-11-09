<?php
require('views/GenerosView.php');
require('models/GenerosModel.php');
class GenerosController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new GenerosModel();
    $this->vista = new GenerosView();
  }

  function getModelo(){
    return $this->modelo;
  }
  
  function irAAdministrarGeneros(){
    $generos=$this->modelo->getGeneros();
    $this->vista->mostrar($generos);
  }

  function guardarGenero(){
<<<<<<< HEAD
    $titulo=$_POST['titulo'];
    $this->modelo->crearGenero($titulo);
    $generos=$this->modelo->getGeneros();
    $this->vista->mostrar($generos);
=======
    if(isset($_POST['titulo'])){
      $titulo=$_POST['titulo'];
      $this->modelo->crearGenero($titulo);
      $generos=$this->modelo->getGeneros();
      $this->vista->mostrar($generos);
    }
    else{
      $this->vista->mostrarMensaje("Error. no se detecto titulo del genero", "danger");
      $generos=$this->modelo->getGeneros();
      $this->vista->mostrar($generos);
    }
  }
  
  function generoAEditar(){
    $id_genero = $_GET['id_genero'];
    $generoAEditar['titulo']=$this->modelo->getGeneroXId($id_genero);
    $generoAEditar['id_genero']=$id_genero;
    $this->vista->mostrarGeneroAEditar($generoAEditar);
  }
  
  function editarGenero(){
    if(isset($_POST['generoEditado'])){
      $tituloGenero=$_POST['generoEditado'];
      $id_genero=$_POST['id_genero'];
      $this->modelo->editarGenero($tituloGenero,$id_genero);
      $generos=$this->modelo->getGeneros();
      $this->vista->mostrar($generos);
    }
    else{
      $this->vista->mostrarMensaje("Error. no se detecto titulo del genero", "danger");
      $generos=$this->modelo->getGeneros();
      $this->vista->mostrar($generos);
    }
>>>>>>> marco
  }
  
  function eliminarGenero(){
    $id_genero = $_GET['id_genero'];
    $this->modelo->eliminarGenero($id_genero);
    $this->modelo->eliminarGeneroPeliculaSegunIdGenero($id_genero);
    $generos = $this->modelo->getGeneros();
<<<<<<< HEAD
    $this->vista->mostrar($generos);;
=======
    $this->vista->mostrar($generos);
>>>>>>> marco
  }
  
}