
$(document).ready(function() {

});

/*
//cargado de comentarios de la api
    function comentariosAjax(id_cabania) {
        console.log("hola");
        $.ajax(
            {
                method:"GET",
                dataType: "JSON",
                url: "api/comentarios/" +id_cabania,//traer id de la cabania que pertenece
                success:function(data) {
                    createComentarios(data);
                }
            }

        )
    }
    //crear tpl de Mustache
    function createComentarios(comentarios){
        $.ajax({ url: 'js/templates/comentarios.mst',
            success: function(templateReceived) {
                var rendered = Mustache.render(templateReceived,{paquete:comentarios});
                $("#div-com").html(rendered);
            }
        });
    }
});*/
