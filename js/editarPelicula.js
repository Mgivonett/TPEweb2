$(document).ready(function(){
    $('#formPeliculaEditar').on('submit',(function(e) {
        e.preventDefault();
        console.log("hola mundo");
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log(data);
                $('.container').html(data);//tengo que mostrar data en la pantalla
            },
            error: function(data){
                alert("error");
                console.log(data);
            }
        });
    }));
});
