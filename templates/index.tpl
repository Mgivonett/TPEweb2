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
  {include file='lista.tpl'}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/peliculas.js"></script>
</body>
</html>
