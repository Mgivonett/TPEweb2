
<nav class="navbar navbar-inverse">
  <div class="dropup">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropup
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Aventura</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Accion</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Animada</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Comedia</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Drama</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Terror</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Suspenso</a></li>
    <li><a class="selecGen" data-idgenero={$genero['id_genero']}>Ciencia-Ficcion</a></li>
  </ul>
</div>
</nav>
<div id="listaPeliculas">

{include file='lista.tpl'}
</div>
