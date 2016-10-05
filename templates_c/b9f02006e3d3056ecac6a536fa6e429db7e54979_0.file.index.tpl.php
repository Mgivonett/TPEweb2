<?php
/* Smarty version 3.1.30, created on 2016-10-03 17:08:30
  from "C:\xampp\htdocs\web2\TPEweb2\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f2746ee706b8_90765845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9f02006e3d3056ecac6a536fa6e429db7e54979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\index.tpl',
      1 => 1475505873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista.tpl' => 1,
  ),
),false)) {
function content_57f2746ee706b8_90765845 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lista de Peliculas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

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
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/peliculas.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
