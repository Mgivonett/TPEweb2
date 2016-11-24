$(document).ready(function(){
    $(document).on('click','.AdminsConfig',function(e){
        e.preventDefault();
        $.get( "index.php?action=Ir_Admins_Config", function(data) {
            $('.container').html(data);
        });
    })
});
