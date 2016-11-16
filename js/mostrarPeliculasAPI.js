
$(document).ready(function() {
    var template;
    $.ajax({
        url: 'js/templates/pelicula.mst',
        success: function (templateReceived) {
            template = templateReceived;
            $('#refresh').click(function (event) {
                event.preventDefault();
                $.ajax(
                    {
                        method: "GET",
                        dataType: "JSON",
                        url: "api/pelicula",
                        success: createPeliculas
                    }
                )
            });
        }
    });

    function createPeliculas(peliculas) {
        var rendered = Mustache.render(template, { paquete: peliculas});

        $('#listaPeliculas').html(rendered);
    }
    

});