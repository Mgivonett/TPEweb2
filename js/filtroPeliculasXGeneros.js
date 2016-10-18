$(document).ready(function(){
    $('body').on('click','.selecGen',function(e){
        e.preventDefault();
        $.get( "index.php?action=mostrar_x_genero",{ titulo: $(this).attr("data-titulogenero") }, function(data) {
            $('#listaPeliculas').html(data);
        });
    });
});

