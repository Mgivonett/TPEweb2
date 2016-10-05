$(document).ready(function(){
    $('#formPelicula').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#listaPeliculas').html(data);
                $(':input','#formPelicula')
                    .not(':button, :submit, :reset, :hidden')
                    .val('');
                $("input[type=checkbox]").each(function() { this.checked=false; });
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $('body').on('click','.eliminarPelicula',function(e){
        e.preventDefault();
        $.get( "index.php?action=eliminar_pelicula",{ id_pelicula: $(this).attr("data-idpelicula") }, function(data) {
            $('#listaPeliculas').html(data);
        });
    });
});
