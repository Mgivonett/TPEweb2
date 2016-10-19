<?php
/* Smarty version 3.1.30, created on 2016-10-19 18:47:54
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807a3bae95250_83336176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3dbcfe70e1a49bdbd92b79a61a8108aba994f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2\\templates\\principal.tpl',
      1 => 1476895670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_5807a3bae95250_83336176 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
