
<<<<<<< HEAD
<ul>
    {foreach from=$peliculas key=index item=pelicula}
        <li>
            {$pelicula['titulo']}
            {$pelicula['link']}
            {$pelicula['descripcion']}
            <img class="pelicula-img" data-idpelicula="{$pelicula['id_pelicula']}" src="{$pelicula['imagen']}" alt="imagen pelicula">
            <ul>
                {foreach from=$pelicula['generos'] key=index item=genero}
                    <li>{$genero}</li>
                {/foreach}
            </ul>
            <a class="eliminarPelicula" href="#" data-idpelicula="{$pelicula['id_pelicula']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            <a class="editarPelicula" href="#" data-idpelicula="{$pelicula['id_pelicula']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
        </li>
    {/foreach}
</ul>
=======
<div class="row">
    {foreach from=$peliculas key=index item=pelicula}
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="{$pelicula['imagen']}" alt="Responsive image" class="pelicula-img" data-idpelicula="{$pelicula['id_pelicula']}">
                <div class="caption">
                    <div class="titulo">
                        <h3>{$pelicula['titulo']}</h3>
                    </div>

                    <div class="descripcion">
                        <p>{$pelicula['descripcion']}</p>
                    </div>

                    <div class="genero">
                        {foreach from=$pelicula['generos'] key=index item=genero}
                            <a>{$genero}</a>

                        {/foreach}
                    </div>

                    <div class="modiff">
                        <p><a href="#" data-idpelicula="{$pelicula['id_pelicula']}"  class="btn btn-primary eliminarPelicula"  role="button" >Eliminar</a>
                            <a href="#" data-idpelicula="{$pelicula['id_pelicula']}" class="btn btn-default editarPelicula" role="button" >Editar</a></p>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
</div>
>>>>>>> marco
