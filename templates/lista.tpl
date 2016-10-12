
<ul>
  {foreach from=$peliculas key=index item=pelicula}
  <li>
      {$pelicula['titulo']}
      {$pelicula['link']}
      {$pelicula['descripcion']}
      <img class="pelicula-img" data-idpelicula="{$pelicula['id_pelicula']}" src="{$pelicula['imagen']}" alt="imagen pelicula">
      <ul>
        {foreach from=$pelicula['generos'] key=index item=genero}
        <li>{$genero}</li>
        {/foreach}
      </ul>
      <a class="eliminarPelicula" href="#" data-idpelicula="{$pelicula['id_pelicula']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      <a class="editarPelicula" href="#" data-idpelicula="{$pelicula['id_pelicula']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
  </li>
  {/foreach}
</ul>
