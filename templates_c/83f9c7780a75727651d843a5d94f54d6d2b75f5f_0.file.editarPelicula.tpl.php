<?php
/* Smarty version 3.1.30, created on 2016-10-19 19:27:54
  from "C:\xampp\htdocs\proyectos\Marco\TPEweb2\templates\editarPelicula.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807ad1a7931d3_73398398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83f9c7780a75727651d843a5d94f54d6d2b75f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Marco\\TPEweb2\\templates\\editarPelicula.tpl',
      1 => 1476468748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807ad1a7931d3_73398398 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
<?php }?>
<h1>Editar</h1>
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


      <input type="checkbox" name="generos[]" value="aventura"> aventura<br>
      <input type="checkbox" name="generos[]" value="accion" > accion<br>
      <input type="checkbox" name="generos[]" value="animada"> animada<br>
      <input type="checkbox" name="generos[]" value="comedia" > comedia<br>
      <input type="checkbox" name="generos[]" value="drama"> drama<br>
      <input type="checkbox" name="generos[]" value="terror" > terror<br>
      <input type="checkbox" name="generos[]" value="suspenso"> suspenso<br>
      <input type="checkbox" name="generos[]" value="ciencia-ficcion" > ciencia ficcion<br>
      <input type="submit" name="Editar" id="editarPeliculaBtn">

    </div>
  </div>
</div>
</div>
</div>
</form>

<?php echo '<script'; ?>
 src="js/editarPelicula.js"><?php echo '</script'; ?>
>
<?php }
}
