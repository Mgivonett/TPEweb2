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
