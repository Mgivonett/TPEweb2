<?php

class PeliculasFiltradasXGeneroView extends View
{
  function mostrarPeliculasDelGenero($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('lista.tpl');
  }
}