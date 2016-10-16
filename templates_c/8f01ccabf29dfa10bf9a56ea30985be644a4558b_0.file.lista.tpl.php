<?php
/* Smarty version 3.1.30, created on 2016-10-17 03:59:06
  from "C:\xampp\htdocs\web2\TPEweb2\templates\lista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5804306a6ecc78_17834396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f01ccabf29dfa10bf9a56ea30985be644a4558b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\lista.tpl',
      1 => 1476193068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5804306a6ecc78_17834396 (Smarty_Internal_Template $_smarty_tpl) {
?>

<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <li>
      <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>

      <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['link'];?>

      <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>

      <img class="pelicula-img" data-idpelicula="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>
" alt="imagen pelicula">
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value['generos'], 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
      <a class="eliminarPelicula" href="#" data-idpelicula="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      <a class="editarPelicula" href="#" data-idpelicula="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
  </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
