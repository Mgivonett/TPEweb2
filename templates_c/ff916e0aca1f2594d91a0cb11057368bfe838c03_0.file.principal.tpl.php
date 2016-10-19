<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:40:40
  from "C:\xampp\htdocs\proyectos\TPEweb2-marco\TPEweb2-marco\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e85876ccf9_79278301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff916e0aca1f2594d91a0cb11057368bfe838c03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-marco\\TPEweb2-marco\\templates\\principal.tpl',
      1 => 1476897660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_5807e85876ccf9_79278301 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
