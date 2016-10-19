<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:40:44
  from "C:\xampp\htdocs\proyectos\TPEweb2-marco\TPEweb2-marco\templates\Admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e85c7b9906_92817542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09b04df985fb35945cb1fc2ebf474189e90235f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-marco\\TPEweb2-marco\\templates\\Admin.tpl',
      1 => 1476897660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminlista.tpl' => 1,
  ),
),false)) {
function content_5807e85c7b9906_92817542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Administrar</h1>

<div class="contenedor">
    <form class="formulario" id="formPelicula" action="index.php?action=guardar_pelicula" method="post" enctype="multipart/form-data">
      <div class="row">
  <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
   <input type="file" name="imagen" required value="" >  <!-- esto es la IMAGEN -->

  <div class="caption">
    <h3><input type="text" name="titulo"  required value="" placeholder="Titulo" ></h3> <!-- esto es TITULO -->
    <p><textarea name="descripcion" placeholder="Descripcion" id="" cols="30" rows="5" ></textarea></p> <!-- esto es DESCRIPCION -->
    <p><input type="text" name="link"  required value="" placeholder="Ingrese link de la Pelicula" ></p> <!-- esto es LINK -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <input type="checkbox" name="generos[]" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
<br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <input type="submit" class="btn btn-primary" name="Agregar" id="agregarPeliculaBtn"><!-- esto es AGREGAR PELICULA -->
      <button type="submit" class="administrar-generos btn btn-primary">Add Genero</button>
    </div>
  </div>
</div>
</div>
</form>
</div>

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:adminlista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php echo '<script'; ?>
 src="js/volverAInicio.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/administradorDeGeneros.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/adminCambiosEnPeliculas.js"><?php echo '</script'; ?>
>
<?php }
}
