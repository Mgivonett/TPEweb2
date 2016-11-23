<h1>{$pelicula['titulo']}</h1>

<div><p>Link: <a href="{$pelicula['link']}">{$pelicula['link']}</a></p></div>
<div><p>Descripcion: {$pelicula['descripcion']}</p></div>
<div class="btn-group" role="group" aria-label="...">
{foreach from=$pelicula['generos'] key=index item=genero}
    <button type="button" class="btn btn-default">{$genero}</button>
{/foreach}
</div>
<br>
{foreach from=$pelicula['imagenes'] key=index item=imagen}
    <img src="{$imagen['direccion']}" data-idimagen="{$imagen['id_imagen']}" alt="Responsive image">
    {if $user['admin']}
        <a href="#" data-idimagen="{$imagen['id_imagen']}" data-idpelicula="{$pelicula['id_pelicula']}" class="btn btn-primary eliminarImagen"  role="button" >Eliminar</a>
    {/if}
{/foreach}

<h2 data-tabtar="lgm-1" class="logmod__heading">Comentarios</h2>
<div class="logmod__heading">
    <span class="logmod__heading-subtitle">Deja tu comentario sobre la pelicula <strong>{$pelicula['titulo']}</strong></span>
</div>
{if isset($user)}

    <form accept-charset="utf-8" action="#" class="crearComentario">
        <input class="id_pelicula" type="hidden" name="id_pelicula" value="{$pelicula['id_pelicula']}"><br>   {*id de la pelicula*}
        <input class="id_usuario" type="hidden" name="id_usuario" value="{$user['id_usuario']}"><br>          {*id del usuario*}
        <div class="form-group">
            <label for="inputComentario" class="col-sm-2 control-label">Comentario</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="comentario" id="inputComentario" rows="3" >              {*comentario*}
                </textarea>

            </div>
        </div>
        <div class="form-group crearComentario">
            <label for="inputPuntuacion" class="col-sm-2 control-label">Puntuacion</label>
            <div class="col-sm-10 col-md-10">
                <select class="form-control" name="puntuacion" id="inputPuntuacion">                         {*puntuacion*}
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar Comentario</button>
            </div>
        </div>
    </form>

{/if}

<div class="comentarios"></div>
