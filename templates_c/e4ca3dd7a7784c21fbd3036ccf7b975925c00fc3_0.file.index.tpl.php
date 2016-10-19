<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:16:00
  from "C:\xampp\htdocs\proyectos\final\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58078e30761803_87060009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ca3dd7a7784c21fbd3036ccf7b975925c00fc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\final\\templates\\index.tpl',
      1 => 1476873864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:principal.tpl' => 1,
  ),
),false)) {
function content_58078e30761803_87060009 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peliculas</title>
  <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="contenedor-gral">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand inicio-Btn" href="#">Peliculas HM</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Generos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
                <li class="selecGen" data-titulogenero="<?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
"><a> <?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
</a></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="admin-peliculas">Administrar</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:principal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>

</div>
<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/detallesPelicula.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/filtroPeliculasXGeneros.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/administradorDePeliculas.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
