<!DOCTYPE html>
<<<<<<< HEAD
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
              {foreach from=$generos key=index item=genero}
                <li class="selecGen" data-titulogenero="{$genero['titulo']}"><a> {$genero['titulo']}</a></li>
              {/foreach}
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
    {include file='principal.tpl'}
  </div>

</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="js/detallesPelicula.js"></script>
<script src="js/filtroPeliculasXGeneros.js"></script>
<script src="js/administradorDePeliculas.js"></script>
</body>
</html>
=======
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

			{foreach from=$generos key=index item=genero}
				<li  class="selecGen colour-3" data-titulogenero="{$genero['titulo']}"><a> {$genero['titulo']}</a></li>
			{/foreach}

		</ul>
    </nav>



<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<div class="container">

				{include file='principal.tpl'}
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
	<script src="libs/jquery/jquery-3.1.1.min.js"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/detallesPelicula.js"></script>
	<script src="js/filtroPeliculasXGeneros.js"></script>
	<script src="js/administradorDePeliculas.js"></script>
	<script src="js/volverAInicio.js"></script>

</div>
</body></html>
>>>>>>> marco
