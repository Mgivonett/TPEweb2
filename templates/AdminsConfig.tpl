<h1>Administrar Usuarios</h1>

<form action="index.php?action=administrar_usuarios" class="administrar_usuarios">
    {foreach from=$usuarios key=index item=usuario}
        {if $usuario['email']!="juanm@gmail.com"}
            <input type="checkbox" name="admin[]" value="{$usuario['email']}" {if in_array($usuario['email'],$admins)}checked{/if}>
            {$usuario['email']}
            <br>
        {/if}
    {/foreach}
    <input data-idusuario="{$usuario['id_usuario']}"  type="submit" class="btn btn-default" name="Agregar" id="agregarAdministrador">
</form>
