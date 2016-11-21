<?php
include_once('View.php');

class PeliculasView extends View
{

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }
    
  function mostrar($peliculas,$generos,$usuarioLogueado){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->assign('usuario',$usuarioLogueado['email']);
    $this->smarty->assign('admin',$usuarioLogueado['admin']);
    $this->smarty->display('index.tpl');
  }
    
  function mostrarPrincipal($peliculas,$generos,$usuarioLogueado){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->assign('usuario',$usuarioLogueado['email']);
    $this->smarty->assign('admin',$usuarioLogueado['admin']);
    $this->smarty->display('body.tpl');
  }

  function getLista($peliculas){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->display('lista.tpl');
  }
    
}

 ?>