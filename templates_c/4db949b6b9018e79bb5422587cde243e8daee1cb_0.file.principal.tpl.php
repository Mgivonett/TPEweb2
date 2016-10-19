<?php
/* Smarty version 3.1.30, created on 2016-10-19 19:28:00
  from "C:\xampp\htdocs\proyectos\Marco\TPEweb2\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807ad20363dd3_10939723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db949b6b9018e79bb5422587cde243e8daee1cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Marco\\TPEweb2\\templates\\principal.tpl',
      1 => 1476715426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
    'file:selectGen.tpl' => 1,
  ),
),false)) {
function content_5807ad20363dd3_10939723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Lista de Peliculas</h1>
<form id="formPelicula" action="index.php?action=guardar_pelicula" method="post" enctype="multipart/form-data">
    <p>TITULO</p>
    <input type="text" name="titulo"  required value="" placeholder="Ingrese titulo de la Pelicula" ><br>
    <p>LINK</p>
    <input type="text" name="link"  required value="" placeholder="Ingrese link de la Pelicula" ><br>
    <p>DESCRIPCION</p>
    <textarea name="descripcion" id="" cols="30" rows="5" ></textarea><br>
    <p>IMAGEN</p>
    <input type="file" name="imagen" required value="" ><br>
    <p>GENEROS</p>
    <input type="checkbox" name="generos[]" value="aventura"> aventura<br>
    <input type="checkbox" name="generos[]" value="accion" > accion<br>
    <input type="checkbox" name="generos[]" value="animada"> animada<br>
    <input type="checkbox" name="generos[]" value="comedia" > comedia<br>
    <input type="checkbox" name="generos[]" value="drama"> drama<br>
    <input type="checkbox" name="generos[]" value="terror" > terror<br>
    <input type="checkbox" name="generos[]" value="suspenso"> suspenso<br>
    <input type="checkbox" name="generos[]" value="ciencia-ficcion" > ciencia ficcion<br>
    <input type="submit" name="Agregar" id="agregarPeliculaBtn">
</form>
<div id="listaPeliculas">
    <?php $_smarty_tpl->_subTemplateRender("file:lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<div class="">
  <?php $_smarty_tpl->_subTemplateRender("file:selectGen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
