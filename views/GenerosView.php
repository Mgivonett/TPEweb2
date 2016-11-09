<?php
include_once('View.php');
class GenerosView extends View
{
  function mostrar($generos){
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('adminGeneros.tpl');
  }

<<<<<<< HEAD
=======
  function mostrarGeneroAEditar($genero){
    $this->smarty->assign('genero',$genero);
    $this->smarty->display('editarGenero.tpl');
  }
>>>>>>> marco
}