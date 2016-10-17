<?php
require('View.php');
class GenerosView extends View
{
  function mostrar($generos){
    $this->smarty->assign('generos',$generos);
    $this->smarty->display('generos.tpl');
  }

}