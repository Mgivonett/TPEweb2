<?php
/* Smarty version 3.1.30, created on 2016-10-07 21:34:11
  from "C:\xampp\htdocs\web2\TPEweb2\templates\editarPelicula.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f7f8b3302fc7_70353299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30633ef47e32a48000c3a287cc043fe555fd8f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\editarPelicula.tpl',
      1 => 1475868844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f7f8b3302fc7_70353299 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }?>
<h1>Pelicula a Editar</h1>
<form id="formPeliculaEditar" action="index.php?action=editar_pelicula" method="post" enctype="multipart/form-data">
    <p>TITULO</p>
    <input type="text" name="titulo"  required value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
" ><br>
    <p>LINK</p>
    <input type="text" name="link"  required value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['link'];?>
"><br>
    <p>DESCRIPCION</p>
    <textarea name="descripcion"  cols="30" rows="4" ><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>
</textarea><br>
    <p>IMAGEN</p>
    <input type="file" name="imagen"><br>
    <input type="hidden" name="id_pelicula" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
"><br>
    <p>GENEROS</p>
    <input type="checkbox" name="generos[]" value="aventura"> aventura<br>
    <input type="checkbox" name="generos[]" value="accion" > accion<br>
    <input type="checkbox" name="generos[]" value="animada"> animada<br>
    <input type="checkbox" name="generos[]" value="comedia" > comedia<br>
    <input type="checkbox" name="generos[]" value="drama"> drama<br>
    <input type="checkbox" name="generos[]" value="terror" > terror<br>
    <input type="checkbox" name="generos[]" value="suspenso"> suspenso<br>
    <input type="checkbox" name="generos[]" value="ciencia-ficcion" > ciencia ficcion<br>
    <input type="submit" name="Editar" id="editarPeliculaBtn">
</form>
<img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>
" alt="imagen-pelicula">

<?php echo '<script'; ?>
 src="js/editarPelicula.js"><?php echo '</script'; ?>
><?php }
}
