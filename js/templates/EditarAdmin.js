$(document).ready(function(){
    $('AdmOrUser').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $('AdmOrUser').html(data);
                    .not(':button, :submit, :reset, :hidden')
                    .val('');
                $("input[type=checkbox]").each(function() { this.checked=false; });
            },
            error: function(data){
                alert("error");
                console.log(data);
            }
        });
    }));
