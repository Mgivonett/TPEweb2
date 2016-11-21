$(document).ready(function(){
    $('body').on('click','.eliminarImagen',function(e){
        e.preventDefault();
        $.get( "index.php?action=eliminar_imagen",{ id_imagen: $(this).attr("data-idimagen"),id_pelicula: $(this).attr("data-idpelicula") }, function(data) {
            $('.container').html(data);
        });
    });
});
