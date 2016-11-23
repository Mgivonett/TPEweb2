$(document).ready(function() {
    $(".SingUp").submit(function(){
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            method: "POST",
            url: $(this).attr("action"),
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('.wrap-body').html(data);
            },
            error: function(data){
                alert(data);
            }
        });
    });
});
