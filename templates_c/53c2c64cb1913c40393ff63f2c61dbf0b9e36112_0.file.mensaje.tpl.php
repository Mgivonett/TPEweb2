<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:19:01
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2\templates\mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58078ee5e319c3_80501736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c2c64cb1913c40393ff63f2c61dbf0b9e36112' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2\\templates\\mensaje.tpl',
      1 => 1476873864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58078ee5e319c3_80501736 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }
}
}
