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
    <input class="aventura" type="checkbox" name="generos[]" value="aventura" {if in_array("aventura",$pelicula['generos'])}checked{/if}> aventura<br>
    <input class="accion" type="checkbox" name="generos[]" value="accion" {if in_array("accion",$pelicula['generos'])}checked{/if}> accion<br>
    <input class="animada" type="checkbox" name="generos[]" value="animada" {if in_array("animada",$pelicula['generos'])}checked{/if}> animada<br>
    <input class="aventura" type="checkbox" name="generos[]" value="comedia" {if in_array("comedia",$pelicula['generos'])}checked{/if}> comedia<br>
    <input class="comedia" type="checkbox" name="generos[]" value="drama" {if in_array("drama",$pelicula['generos'])}checked{/if}> drama<br>
    <input class="drama" type="checkbox" name="generos[]" value="terror" {if in_array("terror",$pelicula['generos'])}checked{/if}> terror<br>
    <input class="suspenso" type="checkbox" name="generos[]" value="suspenso" {if in_array("suspenso",$pelicula['generos'])}checked{/if}> suspenso<br>
    <input class="ciencia-ficcion" type="checkbox" name="generos[]" value="ciencia-ficcion" {if in_array("ciencia-ficcion",$pelicula['generos'])}checked{/if}> ciencia ficcion<br>
    <input type="submit" name="Editar" id="editarPeliculaBtn">
</form>
<img src="{$pelicula['imagen']}" alt="imagen-pelicula">

<script src="js/editarPelicula.js"></script>