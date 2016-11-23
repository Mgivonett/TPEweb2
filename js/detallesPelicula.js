$(document).ready(function(){
    $(document).on('click','.pelicula-img',function(e){
        e.preventDefault();
        var id = $(this).attr("data-idpelicula");
        $.get( "index.php?action=mostrar_pelicula",{ id_pelicula: $(this).attr("data-idpelicula") }, function(data) {
            $('.container').html(data);
            setInterval(function() {getComentarios(id)}, 2000);
            getComentarios(id);
        });
    });
    function getComentarios(id_pelicula) {
        $.ajax(
            {
                method: "GET",
                dataType: "JSON",
                url: "api/comentarios/"+ id_pelicula,
                success: function (comentarios) {
                    $.ajax({
                        url: 'js/templates/comentariosPelicula.mst',
                        success: function (templateReceived) {
                            var rendered = Mustache.render(templateReceived, {paquete: comentarios});
                            $('.comentarios').html(rendered);
                        }
                    })
                }
            }
        );
    }

    $(document).on('submit', '.crearComentario', function(e) {
        e.preventDefault();
        var id = $(".id_pelicula").attr("value");
        var comentario = $(this).serialize();
        $.ajax({
            url: 'api/comentarios',
            data: comentario,
            method: 'POST',
            dataType: 'json',
            success: function () {
                getComentarios(id);
                setInterval(function () {
                    getComentarios(id)
                }, 2000);
            }
        });
    });
    $(document).on('click', '.eliminarComentario', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-idcomentario");
        var comentario = $(this).parents('.comentario');
        $.ajax({
            url: 'api/comentarios/'+id,
            method: 'DELETE',
            success: function () {
                comentario.hide("slow", function(){ comentario.remove(); });
            }
        });
    });
});