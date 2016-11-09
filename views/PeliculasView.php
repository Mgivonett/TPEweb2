<?php
include_once('View.php');

class PeliculasView extends View
{

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }
    
  function mostrar($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('index.tpl');
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
    
}

 ?>