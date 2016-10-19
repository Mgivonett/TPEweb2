<?php
/* Smarty version 3.1.30, created on 2016-10-18 20:59:24
  from "C:\xampp\htdocs\proyectos\Marco\TPEweb2\templates\creacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806710c97f740_28184588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9420062b3d08b57eb38008f8da64e88fab51ec85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Marco\\TPEweb2\\templates\\creacion.tpl',
      1 => 1476817160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_5806710c97f740_28184588 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
      <input type="submit" name="Agregar" id="agregarPeliculaBtn"><!-- esto es AGREGAR PELICULA -->

    </div>
  </div>
</div>
</div>
</form>
</div>

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
