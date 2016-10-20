<div class="row">
    {foreach from=$peliculas key=index item=pelicula}
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="{$pelicula['imagen']}" alt="Responsive image">
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
                    <p><a class="btn btn-primary" role="button" href="{$pelicula['link']}">Ver</a></p>
                </div>
            </div>
        </div>
    {/foreach}
</div>
