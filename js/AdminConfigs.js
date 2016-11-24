   $(document).ready(function(){
       $(document).on('submit','.administrar_usuarios',(function(e) {
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
                   $('.wrap-body').html(data);
               },
               error: function(data){
                  alert("error");
                   console.log(data);
               }
           });
       }));
   });
