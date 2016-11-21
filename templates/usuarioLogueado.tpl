<span class="usuario-logueado">
    {if isset($usuario)}
        {$usuario}:{if $admin}Administrador{else}Usuario{/if}
        <a href="#" class="logout">Log Out</a>

    {/if}

</span>