<?php
/* Smarty version 3.1.30, created on 2016-10-10 22:25:40
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2 (1)\TPEweb2-rama2\templates\editarPelicula.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fbf9449dc951_33386313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb21a286caa063394560c5d126d4a82a62f05ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2 (1)\\TPEweb2-rama2\\templates\\editarPelicula.tpl',
      1 => 1476112298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fbf9449dc951_33386313 (Smarty_Internal_Template $_smarty_tpl) {
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
