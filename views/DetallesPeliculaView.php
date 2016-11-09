<?php
class DetallesPeliculaView extends View
{
  function getPelicula($pelicula){
    $this->smarty->assign('pelicula',$pelicula);
    $this->smarty->display('detallesPelicula.tpl');
  }
}