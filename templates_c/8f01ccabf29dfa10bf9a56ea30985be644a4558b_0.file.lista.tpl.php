<?php
/* Smarty version 3.1.30, created on 2016-09-21 22:40:58
  from "C:\xampp\htdocs\web2\TPEweb2\templates\lista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e2f05a871603_84753114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f01ccabf29dfa10bf9a56ea30985be644a4558b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\lista.tpl',
      1 => 1474490289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2f05a871603_84753114 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <li>
      <?php echo $_smarty_tpl->tpl_vars['pelcula']->value['titulo'];?>

      <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['link'];?>

      <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>

      <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value['generos'], 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
</li>
      </ul>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <a class="eliminarTareas" href="#" data-idtarea="<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_tarea'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      <a href="index.php?action=realizar_tarea&id_tarea=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id_tarea'];?>
"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
  </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
