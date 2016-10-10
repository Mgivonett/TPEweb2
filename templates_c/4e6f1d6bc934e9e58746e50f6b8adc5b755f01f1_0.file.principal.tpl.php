<?php
/* Smarty version 3.1.30, created on 2016-10-07 22:14:24
  from "C:\xampp\htdocs\web2\TPEweb2\templates\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f802209cdad1_92021203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6f1d6bc934e9e58746e50f6b8adc5b755f01f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\principal.tpl',
      1 => 1475871261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_57f802209cdad1_92021203 (Smarty_Internal_Template $_smarty_tpl) {
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

</div><?php }
}
