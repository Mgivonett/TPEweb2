<h1>{$pelicula['titulo']}</h1>
<div><p>Link: <a href="{$pelicula['link']}">{$pelicula['link']}</a></p></div>
<div><p>Descripcion: {$pelicula['descripcion']}</p></div>
<div class="btn-group" role="group" aria-label="...">
{foreach from=$pelicula['generos'] key=index item=genero}
    <button type="button" class="btn btn-default">{$genero}</button>
{/foreach}
</div>
<br>
<img src="{$pelicula['imagen']}" alt="imagen-pelicula">
<input type="hidden" name="id_pelicula" value="{$pelicula['id_pelicula']}"><br>

<script src="js/volverAInicio.js"></script>