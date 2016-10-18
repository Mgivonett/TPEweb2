$(document).ready(function(){
    $('.admin-peliculas').on('click',function(e){
        e.preventDefault();
        $.get( "index.php?action=ir_a_administrar_peliculas", function(data) {
            $('.container').html(data);
        });
    })
});
