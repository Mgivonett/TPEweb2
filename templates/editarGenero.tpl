<form class="editarGeneroForm" action="index.php?action=editar_genero" method="post" enctype="multipart/form-data">
    <input type="text" name="generoEditado" value="{$genero['titulo']}" >
    <input type="hidden" name="id_genero" value="{$genero['id_genero']}">
    <input type="submit" name="guardar-genero-editado" id="editarGeneroBtn">
</form>
<script src="js/editarGenero.js"></script>