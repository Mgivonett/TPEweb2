<?php
/* Smarty version 3.1.30, created on 2016-10-16 06:55:00
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2 (1)\TPEweb2-rama2\templates\mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58030824514152_54759951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e87e4564e466bd0fa4f23d328e6b6787e34233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2 (1)\\TPEweb2-rama2\\templates\\mensaje.tpl',
      1 => 1476267862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58030824514152_54759951 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }
}
}
