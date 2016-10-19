<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:45:39
  from "C:\xampp\htdocs\proyectos\TPEweb2-marco\TPEweb2-marco\templates\mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e983b6a250_17322150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150380788f50b94cfc065eafd88cf63ae5130b36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-marco\\TPEweb2-marco\\templates\\mensaje.tpl',
      1 => 1476897660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807e983b6a250_17322150 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }
}
}
