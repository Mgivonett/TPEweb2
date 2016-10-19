<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:45:44
  from "C:\xampp\htdocs\proyectos\TPEweb2-marco\TPEweb2-marco\templates\adminGeneros.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e9882feeb5_70011666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e44b8266caa117a73418d7d7f7372caca887f490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-marco\\TPEweb2-marco\\templates\\adminGeneros.tpl',
      1 => 1476897660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807e9882feeb5_70011666 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Administrador de Generos</h1>
<form class="formGuardarGenero" action="index.php?action=guardar_genero" method="post" enctype="multipart/form-data">
    <p>ingrese el nuevo genero aqui</p>
    <input type="text" name="titulo"  required><br>
    <input type="submit" name="guardar-genero" id="guargarGeneroBtn">
</form>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
<ul class="lista-de-generos">
  <li>
            <a class="eliminarGenero" href="#" data-idgenero="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a><br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </li>
  </ul>

<?php echo '<script'; ?>
 src="js/adminCambiosEnGeneros.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/volverAInicio.js"><?php echo '</script'; ?>
>
<?php }
}
