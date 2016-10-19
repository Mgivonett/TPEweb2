<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:38:50
  from "C:\xampp\htdocs\proyectos\Marco\TPEweb2\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e7ea4c7672_40542473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db949b6b9018e79bb5422587cde243e8daee1cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Marco\\TPEweb2\\templates\\principal.tpl',
      1 => 1476911679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_5807e7ea4c7672_40542473 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
