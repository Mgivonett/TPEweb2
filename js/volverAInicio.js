$(document).ready(function () {
    $(".inicio-Btn").on('click',function(e){
      // e.preventDefault();
        $.get( "index.php?action=mostrar_peliculas", function(data) {
            console.log("boton presiondo");
            $('.container').html(data);
        });
    });
});
