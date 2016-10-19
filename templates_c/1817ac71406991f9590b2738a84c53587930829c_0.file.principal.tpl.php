<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:16:50
  from "C:\xampp\htdocs\proyectos\TPEweb2-issue3\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e2c233b844_94001020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1817ac71406991f9590b2738a84c53587930829c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-issue3\\templates\\principal.tpl',
      1 => 1476911679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_5807e2c233b844_94001020 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
