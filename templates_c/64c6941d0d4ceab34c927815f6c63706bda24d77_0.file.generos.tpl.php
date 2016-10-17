<?php
/* Smarty version 3.1.30, created on 2016-10-17 17:14:25
  from "C:\xampp\htdocs\web2\TPEweb2\templates\generos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5804ead1d93441_79575039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c6941d0d4ceab34c927815f6c63706bda24d77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\generos.tpl',
      1 => 1476709260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5804ead1d93441_79575039 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Administrador de Generos</h1>
<form class="formGuardarGenero" action="index.php?action=guardar_genero" method="post" enctype="multipart/form-data">
    <p>ingrese el nuevo genero aqui</p>
    <input type="text" name="titulo"  required><br>
    <input type="submit" name="guardar-genero" id="guargarGeneroBtn">
</form>
<ul class="lista-de-generos">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>

            <a class="eliminarGenero" href="#" data-idgenero="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>


<button class="inicio-Btn" >Inicio</button>
<?php echo '<script'; ?>
 src="js/administradorDGeneros.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/volverAInicio.js"><?php echo '</script'; ?>
>
<?php }
}
