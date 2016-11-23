<?php
require_once ('View.php');
class UserView extends View
{
  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrar($error){
    $this->smarty->display('login.tpl');
  }
  
  function mostrarUsuario($user){
    $this->smarty->assign('usuario',$user['email']);
    $this->smarty->display('usuarioLogueado.tpl');
  }
}
 ?>
