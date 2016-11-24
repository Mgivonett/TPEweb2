{if isset($mensaje)}
    <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
{/if}

<h1>Editar</h1>
<div class="contenedor">

    <form id="formPeliculaEditar" action="index.php?action=editar_pelicula" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    {foreach from=$pelicula['imagenes'] key=index item=imagen}
                        <img src="{$imagen['direccion']}" data-idimagen="{$imagen['id_imagen']}" class="img-responsive img-thumbnail" alt="Responsive image">
                        {if $user['admin']}
                            <a href="#" data-idimagen="{$imagen['id_imagen']}" data-idpelicula="{$pelicula['id_pelicula']}" class="btn btn-primary eliminarImagen"  role="button" >Eliminar</a>
                        {/if}
                    {/foreach}
                    <input type="file" name="imagenes[]" multiple>
                    <input type="hidden" name="id_pelicula" value="{$pelicula['id_pelicula']}"><br>

                    <div class="caption">
                        <h3><input type="text" name="titulo" required value="{$pelicula['titulo']}"></h3>

                        <p><textarea name="descripcion" cols="30" rows="4">{$pelicula['descripcion']}</textarea></p>

                        <p><input type="text" name="link" required value="{$pelicula['link']}"></p>


                        {foreach from=$generos key=index item=genero}
                            <input type="checkbox" name="generos[]" value="{$genero['titulo']}"
                                   {if in_array($genero['titulo'],$pelicula['generos'])}checked{/if}>
                            {$genero['titulo']}
                            <br>
                        {/foreach}
                        <input type="submit" class="btn btn-primary" name="Editar" id="editarPeliculaBtn">

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="js/editarPelicula.js"></script>