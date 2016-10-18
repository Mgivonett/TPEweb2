
<h1>Administrador de Generos</h1>
<form class="formGuardarGenero" action="index.php?action=guardar_genero" method="post" enctype="multipart/form-data">
    <p>ingrese el nuevo genero aqui</p>
    <input type="text" name="titulo"  required><br>
    <input type="submit" name="guardar-genero" id="guargarGeneroBtn">
</form>
<ul class="lista-de-generos">
    {foreach from=$generos key=index item=genero}
        <li>{$genero['titulo']}
            <a class="eliminarGenero" href="#" data-idgenero="{$genero['id_genero']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </li>
    {/foreach}
</ul>

<script src="js/adminCambiosEnGeneros.js"></script>
<script src="js/volverAInicio.js"></script>
