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
    {foreach from=$generos key=index item=genero}
        <input type="checkbox" name="generos[]" value="{$genero['titulo']}"> {$genero['titulo']}<br>
    {/foreach}
    <input type="submit" name="Agregar" id="agregarPeliculaBtn">
</form>
<button class="administrar-generos">Administrador de Generos</button>
<div id="listaPeliculas">
    {include file='adminlista.tpl'}
</div>

<script src="js/volverAInicio.js"></script>
<script src="js/administradorDeGeneros.js"></script>
<script src="js/adminCambiosEnPeliculas.js"></script>