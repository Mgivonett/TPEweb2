<?php
include_once('View.php');
class GenerosView extends View
{
  function mostrar($generos){
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('adminGeneros.tpl');
  }

}