<ul>
  {foreach from=$peliculas key=index item=pelicula}
  <li>
      {$pelicula['titulo']}
      {$pelicula['link']}
      {$pelicula['descripcion']}
      <img src="{$pelicula['imagen']}" alt="imagen pelicula">
      <ul>
        {foreach from=$pelicula['generos'] key=index item=genero}
        <li>{$genero}</li>
        {/foreach}
      </ul>
      <a class="eliminarPelicula" href="#" data-idpelicula="{$pelicula['id_pelicula']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      {*<a href="index.php?action=realizar_tarea&id_tarea={$pelicula['id_tarea']}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>*}
  </li>
  {/foreach}
</ul>
