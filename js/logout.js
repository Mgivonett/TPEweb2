$(document).ready(function () {
    $(document).on('click','.logout',function(e){
        e.preventDefault();
        $.get( "index.php?action=logout", function(data) {
            $('.wrap-body').html(data);
        });
    }) ;
});
