<?php
/* Smarty version 3.1.30, created on 2016-10-20 00:09:47
  from "C:\xampp\htdocs\proyectos\TPEweb2-marco\TPEweb2-marco\templates\editarPelicula.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807ef2bb47b63_91251050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64dcc5f1815eff9dd3b677f8ae42d3502ebbe31c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-marco\\TPEweb2-marco\\templates\\editarPelicula.tpl',
      1 => 1476914970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807ef2bb47b63_91251050 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }?>
<h1>Editar</h1>
<div class="contenedor">

<form id="formPeliculaEditar" action="index.php?action=editar_pelicula" method="post" enctype="multipart/form-data">


<div class="row">
<div class="col-sm-6 col-md-4">
<div class="thumbnail">

  <img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>
" alt="Responsive image">
  <input type="file" name="imagen">
  <input type="hidden" name="id_pelicula" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><br>

  <div class="caption">
    <h3><input type="text" name="titulo"  required value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
" ></h3>

    <p><textarea name="descripcion"  cols="30" rows="4" ><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>
</textarea></p>

    <p><input type="text" name="link"  required value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['link'];?>
"></p>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <input type="checkbox" name="generos[]" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['genero']->value['titulo'],$_smarty_tpl->tpl_vars['pelicula']->value['generos'])) {?>checked<?php }?>> <?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
<br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


      <input type="submit" class="btn btn-primary" name="Editar" id="editarPeliculaBtn">

    </div>
  </div>
</div>
</div>
</div>
</form>
</div>

<?php echo '<script'; ?>
 src="js/editarPelicula.js"><?php echo '</script'; ?>
>
<?php }
}
