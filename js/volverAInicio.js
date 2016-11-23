$(document).ready(function () {
    $(document).on('click','.inicio-Btn',function(e){
        e.preventDefault();
        $.get( "index.php?action=home", function(data) {
            $('.container').html(data);
            window.location.reload(true);
        });
    });
});
