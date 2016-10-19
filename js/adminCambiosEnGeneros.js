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
                window.location.reload(true)
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
            window.location.reload(true)
        });
    })
});
