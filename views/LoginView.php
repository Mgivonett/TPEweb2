<?php
require_once ('View.php');
class LoginView extends View
{
  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrar($error){
    $this->smarty->display('login.tpl');
  }

}
 ?>
