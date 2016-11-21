$(document).ready(function(){
    $(document).on('click','.login',function(e){
        e.preventDefault();
        $.get( "index.php?action=ir_a_login", function(data) {
            $('.container').html(data);
        });
    });  
});
