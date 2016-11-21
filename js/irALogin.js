$(document).ready(function(){
    $('.login').on('click',function(e){
        e.preventDefault();
        $.get( "index.php?action=ir_a_login", function(data) {
            $('.container').html(data);
        });
    });  
});
