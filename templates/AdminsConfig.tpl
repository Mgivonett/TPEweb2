<h1>Administrar Usuarios</h1>

<table class="table table-bordered">
  <ul>
      <tr>
          <th>Usuario</th>
          <th>Administrador?</th>
          <th></th>
    </tr>
  {foreach from=$usuarios key=index item=usuario}
  <tr>
    <th>{$usuario['email']}</th>
    <th><input type="checkbox" name="admin[]" value="{$usuario['email']}"></th>
    <th><input data-idusuario="{$usuario['id_usuario']}"  type="submit" class="btn btn-default" name="Agregar" id="agregarAdministrador"></th>
  </tr><br>
  {/foreach}
</table>
