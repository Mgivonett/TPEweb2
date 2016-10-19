$(document).ready(function(){
    $('body').on('click','.pelicula-img',function(e){
        e.preventDefault();
        $.get( "index.php?action=mostrar_pelicula",{ id_pelicula: $(this).attr("data-idpelicula") }, function(data) {
            $('.container').html(data);
        });
    });
});