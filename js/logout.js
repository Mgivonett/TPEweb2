$(document).ready(function () {
    $('.logout').on('click',function(e){
        e.preventDefault();
        $.get( "index.php?action=logout", function(data) {
            $('.wrap-body').html(data);
        });
    }) ;
});
