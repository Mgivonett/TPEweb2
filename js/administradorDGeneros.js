$(document).ready(function(){
    $('.formGuardarGenero').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log("lpm"+$(this).attr('action'));
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("arriba las manos guachin");
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
    })
});
