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

<<<<<<< HEAD
<<<<<<< HEAD
<div class="mensaje">
  {include file='mensaje.tpl'}
</div>

=======
>>>>>>> rama2
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
  {include file='lista.tpl'}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<<<<<<< HEAD
<script src="js/tareas.js"></script>
=======
<script src="js/peliculas.js"></script>
>>>>>>> rama2
=======
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
>>>>>>> rama2
</body>
</html>
