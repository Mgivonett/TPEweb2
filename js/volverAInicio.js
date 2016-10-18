$(document).ready(function () {
    $(".inicio-Btn").on('click',function(e){
        e.preventDefault();
        $.get( "index.php?action=home", function(data) {
            $('.container').html(data);
            window.location.reload(true);
        });
    });
});
