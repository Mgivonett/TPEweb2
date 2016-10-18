$(document).ready(function () {
   $('.administrar-generos').on('click',function(e){
      e.preventDefault();
      $.get( "index.php?action=ir_a_administrar_generos", function(data) {
         $('.container').html(data);
      });
   }) ;
});