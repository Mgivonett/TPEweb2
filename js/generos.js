$(document).on('click', '.selecGen', function(){
  console.log(entro el select);
    event.preventDefault();

   var varGenero= $('.selecGen').val();

    e.preventDefault();
    $.get( "index.php?action=mostrar_genero",{ id_genero: $(this).attr("data-idgenero") }, function(data) {
        $('.container').html(data);
    });
});
 }
