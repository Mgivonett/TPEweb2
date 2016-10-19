<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:16:00
  from "C:\xampp\htdocs\proyectos\final\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58078e30bddf67_07325394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7c720dfbc12cde183e6b7ee4b1be14bd69e2335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\final\\templates\\principal.tpl',
      1 => 1476873864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_58078e30bddf67_07325394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Lista de Peliculas</h1>
<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
