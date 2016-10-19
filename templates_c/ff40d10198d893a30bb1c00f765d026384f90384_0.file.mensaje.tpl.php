<?php
/* Smarty version 3.1.30, created on 2016-10-20 00:24:33
  from "C:\xampp\htdocs\proyectos\Marco\TPEweb2\templates\mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807f2a153db97_16514787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff40d10198d893a30bb1c00f765d026384f90384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Marco\\TPEweb2\\templates\\mensaje.tpl',
      1 => 1476911679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807f2a153db97_16514787 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }
}
}
