<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:16:00
  from "C:\xampp\htdocs\proyectos\final\templates\lista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58078e30d23024_75917263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a48e6c5fcbc1354eaaa278ea9051c4aa0cde38d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\final\\templates\\lista.tpl',
      1 => 1476873864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58078e30d23024_75917263 (Smarty_Internal_Template $_smarty_tpl) {
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
  </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
