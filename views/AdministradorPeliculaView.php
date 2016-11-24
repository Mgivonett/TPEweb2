<?php

class AdministradorPeliculaView extends View
{
  function mostrarAdministradorDePeliculas($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('Admin.tpl');
  }
  
  function mostrar($peliculas,$generos){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('index.tpl');
  }

  function getListaParaAdmin($peliculas){
    $this->smarty->assign('peliculas',$peliculas);
    $this->smarty->display('adminlista.tpl');
  }

  function mostrarPelicula($pelicula,$generos,$admin){//muestra una pelicula, traida por id, al template editarPelicula para editarla
    $this->smarty->assign('pelicula',$pelicula);
    $this->smarty->assign('generos',$generos);
    $this->smarty->assign('user',$admin);
    $this->smarty->display('editarPelicula.tpl');
  }
}