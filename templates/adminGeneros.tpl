
<h1>Administrador de Generos</h1>
<form class="formGuardarGenero" action="index.php?action=guardar_genero" method="post" enctype="multipart/form-data">
    <p>ingrese el nuevo genero aqui</p>
    <input type="text" class="titulopelicula" name="titulo" placeholder="Titulo" required><br>
    <input type="submit" name="guardar-genero" id="guargarGeneroBtn">
</form>
    <table class="table table-bordered">
      <ul class="lista-de-generos">
          <tr>
              <th>Genero</th>
              <th>Eliminar</th>
              <th>Editar</th>
        </tr>
      {foreach from=$generos key=index item=genero}
      <tr>
        <th>{$genero['titulo']}</th>
        <th><a class="eliminarGenero glyphicon glyphicon-remove" aria-hidden="true" href="#" data-idgenero="{$genero['id_genero']}"></th>
        <th><a class="editarGenero glyphicon glyphicon-pencil" aria-hidden="true" href="#" data-idgenero="{$genero['id_genero']}" ></th>
      </tr><br>
      {/foreach}
    </table>
  </ul>
<script src="js/adminCambiosEnGeneros.js"></script>
