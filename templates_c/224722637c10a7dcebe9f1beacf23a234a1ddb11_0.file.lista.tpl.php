<?php
/* Smarty version 3.1.30, created on 2016-10-20 00:40:05
  from "C:\xampp\htdocs\proyectos\TPEweb2-marco\TPEweb2-marco\templates\lista.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807f6459c4b63_01777976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224722637c10a7dcebe9f1beacf23a234a1ddb11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-marco\\TPEweb2-marco\\templates\\lista.tpl',
      1 => 1476916800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807f6459c4b63_01777976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <div class="col-sm-5 col-md-3">
        <div class="thumbnail">
          <img src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>
" alt="Responsive image">
          <div class="caption">
        <div class="titulo">
          <h3><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['titulo'];?>
</h3>
        </div>

        <div class="descripcion">
          <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['descripcion'];?>
</p>
        </div>

        <div class="genero">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pelicula']->value['generos'], 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <a><?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
</a>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </div>
          <p><a class="btn btn-primary"  role="button" href="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['link'];?>
" >Ver</a></p>
          </div>
        </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<?php }
}
