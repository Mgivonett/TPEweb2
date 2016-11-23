$(document).ready(function(){
    $('.AdminsConfig').on('click',function(e){
        e.preventDefault();
        $.get( "index.php?action=Ir_Admins_Config", function(data) {
            $('.container').html(data);
        });
    })
});
