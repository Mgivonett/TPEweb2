<?php
/* Smarty version 3.1.30, created on 2016-10-19 23:16:49
  from "C:\xampp\htdocs\proyectos\TPEweb2-issue3\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807e2c1f3a320_72962209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41094b2a0d6686b4f64941e360b0301622a3174' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-issue3\\templates\\index.tpl',
      1 => 1476911679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:principal.tpl' => 1,
  ),
),false)) {
function content_5807e2c1f3a320_72962209 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Peliculas Tudai</title>
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
  ================================================== -->
	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/cssBootstrap/index.css" media="screen" title="no title">
	<!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="wrap-body">
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo ">
				<a href="#" class="inicio-Btn"><img src="css/imagenes/logo.png"></a></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center">....................</h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->

    <nav class="cmn-tile-nav">
		<ul class="clearfix">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['genero']->value) {
?>
				<li  class="selecGen colour-3" data-titulogenero="<?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
"><a> <?php echo $_smarty_tpl->tpl_vars['genero']->value['titulo'];?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		</ul>
    </nav>



<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
<div class="container">

	        <?php $_smarty_tpl->_subTemplateRender("file:principal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
</div>
</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">

	<div class="copyright">
		<div class="wrapper">
			Copyright 2016 - <a href="https://youtu.be/mJm8HTcTc4o" target="_blank" rel="nofollow">Rodriguez, Givonetti</a>
			<ul class="quick-link f-right">

          <li><a href="#" class="admin-peliculas">Administrar</a></li>

			</ul>
		</div>
	</div>

</footer>


	<!-- js -->
	<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
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

	<?php echo '<script'; ?>
 src="js/js/classie.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/js/demo.js"><?php echo '</script'; ?>
>

</div>
</body></html>
<?php }
}
