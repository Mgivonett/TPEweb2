<?php
  include_once('View.php');

  class UserView extends View
  {

    function mostrarForm($msj){
  $this->smarty->assign('msj', $msj);
  $this->smarty->display('createAcoount.tpl');
  }
}

 ?>
