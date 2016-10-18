
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
  </li>
  {/foreach}
</ul>
