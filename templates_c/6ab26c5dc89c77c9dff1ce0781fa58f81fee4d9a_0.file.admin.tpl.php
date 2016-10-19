<?php
/* Smarty version 3.1.30, created on 2016-10-19 21:35:28
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807cb00d40cd7_31465917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab26c5dc89c77c9dff1ce0781fa58f81fee4d9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2\\templates\\admin.tpl',
      1 => 1476905720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminlista.tpl' => 1,
  ),
),false)) {
function content_5807cb00d40cd7_31465917 (Smarty_Internal_Template $_smarty_tpl) {
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

      <input type="checkbox" name="generos[]" value="aventura"> aventura<br>
      <input type="checkbox" name="generos[]" value="accion" > accion<br>
      <input type="checkbox" name="generos[]" value="animada"> animada<br>
      <input type="checkbox" name="generos[]" value="comedia" > comedia<br>
      <input type="checkbox" name="generos[]" value="drama"> drama<br>
      <input type="checkbox" name="generos[]" value="terror" > terror<br>
      <input type="checkbox" name="generos[]" value="suspenso"> suspenso<br>
      <input type="checkbox" name="generos[]" value="ciencia-ficcion" > ciencia ficcion<br>
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
