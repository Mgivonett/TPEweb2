<h1>{$pelicula['titulo']}</h1>
<div><p>Link: <a href="{$pelicula['link']}">{$pelicula['link']}</a></p></div>
<div><p>Descripcion: {$pelicula['descripcion']}</p></div>
<div class="btn-group" role="group" aria-label="...">
{foreach from=$pelicula['generos'] key=index item=genero}
    <button type="button" class="btn btn-default">{$genero}</button>
{/foreach}
</div>
<br>
{foreach from=$pelicula['imagenes'] key=index item=imagen}
    <img src="{$imagen['direccion']}" data-idimagen="{$imagen['id_imagen']}" alt="Responsive image">
{/foreach}
<input type="hidden" name="id_pelicula" value="{$pelicula['id_pelicula']}"><br>
