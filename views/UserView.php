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

  function IrAdminsConfig($usuarios,$admins){  //Nos lleva a la plantilla de editar Usuarios.
    $this->smarty->assign('usuarios', $usuarios);
    $this->smarty->assign('admins', $admins);
    $this->smarty->display('AdminsConfig.tpl');
  }
  
}
 ?>
