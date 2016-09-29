<ul>
  {foreach from=$peliculas key=index item=pelicula}
  <li>
      {$pelcula['titulo']}
      {$pelicula['link']}
      {$pelicula['descripcion']}
      {$pelicula['imagen']}
      <ul>
        {foreach from=$pelicula['generos'] key=index item=genero}
        <li>{$genero}</li>
      </ul>
      {/foreach}
      <a class="eliminarTareas" href="#" data-idtarea="{$tarea['id_tarea']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      <a href="index.php?action=realizar_tarea&id_tarea={$tarea['id_tarea']}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
  </li>
  {/foreach}
</ul>
