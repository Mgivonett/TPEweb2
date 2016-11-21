
<h1>Administrar</h1>

<div class="contenedor">
    <form class="formulario" id="formPelicula" action="index.php?action=guardar_pelicula" method="post"
          enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <input type="file" name="imagenes[]" required value="" multiple>  <!-- esto es un input para las IMAGENES -->

                    <div class="caption">
                        <h3><input type="text" name="titulo" required value="" placeholder="Titulo"></h3>
                        <!-- esto es TITULO -->
                        <p><textarea name="descripcion" placeholder="Descripcion" id="" cols="30" rows="5"></textarea>
                        </p> <!-- esto es DESCRIPCION -->
                        <p><input type="text" name="link" required value="" placeholder="Ingrese link de la Pelicula">
                        </p> <!-- esto es LINK -->
                        {foreach from=$generos key=index item=genero}
                            <input type="checkbox" name="generos[]" value="{$genero['titulo']}">
                            {$genero['titulo']}
                            <br>
                        {/foreach}
                        <input type="submit" class="btn btn-primary" name="Agregar" id="agregarPeliculaBtn">
                        <!-- esto es AGREGAR PELICULA -->
                        <button class="administrar-generos btn btn-primary">Admin Generos</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="listaPeliculas">
    {include file='adminlista.tpl'}
</div>
<script src="js/adminCambiosEnPeliculas.js"></script>
<script src="js/administradorDeGeneros.js"></script>
