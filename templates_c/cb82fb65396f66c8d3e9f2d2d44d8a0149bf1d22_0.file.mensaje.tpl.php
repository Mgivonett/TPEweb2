<?php
/* Smarty version 3.1.30, created on 2016-10-03 16:29:04
  from "C:\xampp\htdocs\web2\TPEweb2\templates\mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f26b30088923_97327374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb82fb65396f66c8d3e9f2d2d44d8a0149bf1d22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\mensaje.tpl',
      1 => 1475504674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f26b30088923_97327374 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }
}
}
