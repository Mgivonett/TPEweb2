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
    $titulo=$_POST['titulo'];
    $this->modelo->crearGenero($titulo);
    $generos=$this->modelo->getGeneros();
    $this->vista->mostrar($generos);
  }
  
  function eliminarGenero(){
    $id_genero = $_GET['id_genero'];
    $this->modelo->eliminarGenero($id_genero);
    $this->modelo->eliminarGeneroPeliculaSegunIdGenero($id_genero);
    $generos = $this->modelo->getGeneros();
    $this->vista->mostrar($generos);;
  }
  
}