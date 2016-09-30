<?php
require('libs/Smarty.class.php');

class PeliculasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  function mostrar($peliculas){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->display('index.tpl');
  }

  function getLista($peliculas){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->display('lista.tpl');
  }

}



 ?>
