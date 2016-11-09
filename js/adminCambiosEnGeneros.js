$(document).ready(function(){
    $('.formGuardarGenero').on('submit',(function(e) {
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
                $('.container').html(data);
            },
            error: function(data){
                alert("error");
                console.log(data);
            }
        });
    }));
    $('body').on('click','.eliminarGenero',function(e){
        e.preventDefault();
        $.get( "index.php?action=eliminar_genero",{ id_genero: $(this).attr("data-idgenero") }, function(data) {
            $('.container').html(data);
        });
<<<<<<< HEAD
    })
=======
    });
    var liAReemplazar;
    $('body').on('click','.editarGenero',function(e){
        e.preventDefault();
        liAReemplazar=$(this).parent();
        $.get("index.php?action=ir_a_editar_genero",{ id_genero: $(this).attr("data-idgenero") },function(obj){
            $(liAReemplazar[0]).html(obj);
        });
    });
>>>>>>> marco
});
