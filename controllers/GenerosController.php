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

  function irAAdministrarGeneros(){
    $generos=$this->modelo->getGeneros();
    $this->vista->mostrar($generos);
  }

  function guardarGenero(){
    $titulo=$_POST['titulo'];
    print_r($_POST);
    $this->modelo->crearGenero($titulo);
    $generos=$this->modelo->getGeneros();
    $this->vista->mostrar($generos);
  }
  
  function eliminarGenero(){
    $key = $_GET['id_genero'];
    $this->modelo->eliminarGenero($key);
    $generos = $this->modelo->getGeneros();
    $this->vista->mostrar($generos);
  }
  
}