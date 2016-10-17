<?php
/* Smarty version 3.1.30, created on 2016-10-14 20:42:51
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2 (1)\TPEweb2-rama2\templates\creacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5801272b5e2641_77992510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f92b5280b662d0055b5958cc5ed08f472b45337a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2 (1)\\TPEweb2-rama2\\templates\\creacion.tpl',
      1 => 1476470447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_5801272b5e2641_77992510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="formPelicula" action="index.php?action=guardar_pelicula" method="post" enctype="multipart/form-data">
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

<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
