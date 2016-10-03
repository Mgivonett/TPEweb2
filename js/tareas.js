$(document).ready(function(){
    $('#formPelicula').on('submit',(function(e) {
        e.preventDefault();
        console.log(e);
        var formData = new FormData(this);
        console.log($(this).attr('action'));
        console.log(formData.valueOf('imagen'));
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('#listaPeliculas').html(data);
                $(':input',':checkbox','#formPelicula')
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
                    .removeAttr('checked')
                    .removeAttr('selected');
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    /*$('#agregarPeliculaBtn').click(function(){
      event.preventDefault();
      $.post( "index.php?action=guardar_pelicula",$("#formPelicula").serialize(), function(data) {
        $('#listaPeliculas').html(data);
          console.log(data);
   /!*     $(':input','#formPelicula')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');*!/
      });
    });*/

  $('.eliminarPelicula').click(function(){
    event.preventDefault();
    $.get( "index.php?action=eliminar_pelicula",{ id_pelicula: $(this).attr("data-idpelicula") }, function(data) {
      $('#listaTareas').html(data);
     $('#pelicula').val('');
    });
  
  });
});
