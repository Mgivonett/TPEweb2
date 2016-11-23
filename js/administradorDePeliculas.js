$(document).ready(function(){
    $(document).on('click','.admin-peliculas',function(e){
        e.preventDefault();
        $.get( "index.php?action=ir_a_administrar_peliculas", function(data) {
            $('.container').html(data);
        });
    })
});
