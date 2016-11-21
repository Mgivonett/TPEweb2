<?php
class DetallesPeliculaView extends View
{
  function getPelicula($pelicula,$usuarioLogueado){
    $this->smarty->assign('pelicula',$pelicula);
    $this->smarty->assign('user',$usuarioLogueado);
    $this->smarty->display('detallesPelicula.tpl');
  }
}