<?php
require('View.php');

class PeliculasView extends View
{
/*  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }*/

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
    $this->smarty->display('mensaje.tpl');
  }

  function mostrar($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('index.tpl');
  }

  function mostrarPeliculasDelGenero($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('lista.tpl');
  }

  function mostrarPrincipal($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('principal.tpl');
  }

  function getLista($peliculas){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->display('lista.tpl');
  }

  function mostrarPelicula($pelicula,$generos){//muestra una pelicula, traida por id, al template editarPelicula para editarla
    $this->smarty->assign('pelicula',$pelicula);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('editarPelicula.tpl');
  }
  
  function getPelicula($pelicula){
    $this->smarty->assign('pelicula',$pelicula);
    $this->smarty->display('detallesPelicula.tpl');
  }
}

 ?>