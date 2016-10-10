{if isset($mensaje)}
    <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
{/if}
<h1>Pelicula a Editar</h1>
<form id="formPeliculaEditar" action="index.php?action=editar_pelicula" method="post" enctype="multipart/form-data">
    <p>TITULO</p>
    <input type="text" name="titulo"  required value="{$pelicula['titulo']}" ><br>
    <p>LINK</p>
    <input type="text" name="link"  required value="{$pelicula['link']}"><br>
    <p>DESCRIPCION</p>
    <textarea name="descripcion"  cols="30" rows="4" >{$pelicula['descripcion']}</textarea><br>
    <p>IMAGEN</p>
    <input type="file" name="imagen"><br>
    <input type="hidden" name="id_pelicula" value="{$pelicula['id_pelicula']}"><br>
    <p>GENEROS</p>
    <input type="checkbox" name="generos[]" value="aventura"> aventura<br>
    <input type="checkbox" name="generos[]" value="accion" > accion<br>
    <input type="checkbox" name="generos[]" value="animada"> animada<br>
    <input type="checkbox" name="generos[]" value="comedia" > comedia<br>
    <input type="checkbox" name="generos[]" value="drama"> drama<br>
    <input type="checkbox" name="generos[]" value="terror" > terror<br>
    <input type="checkbox" name="generos[]" value="suspenso"> suspenso<br>
    <input type="checkbox" name="generos[]" value="ciencia-ficcion" > ciencia ficcion<br>
    <input type="submit" name="Editar" id="editarPeliculaBtn">
</form>
<img src="{$pelicula['imagen']}" alt="imagen-pelicula">

<script src="js/editarPelicula.js"></script>