<h1>{$pelicula['titulo']}</h1>
<div><p>Link: {$pelicula['link']}</p></div>
<div><p>Descripcion: {$pelicula['descripcion']}</p></div>
<div>
{foreach from=$pelicula['generos'] key=index item=genero}
    <span>{$genero} </span>
{/foreach}
</div>
<img src="{$pelicula['imagen']}" alt="imagen-pelicula">
<input type="hidden" name="id_pelicula" value="{$pelicula['id_pelicula']}"><br>

<button class="inicio-Btn" >Inicio</button>

<script src="js/volverAInicio.js"></script>