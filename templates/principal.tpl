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