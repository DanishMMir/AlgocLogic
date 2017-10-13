
$.validator.setDefaults({
  highlight: function (input) {
            $(input).parents('.form-input').addClass('has-error');

        },
        unhighlight: function (input) {
            $(input).parents('.form-input').removeClass('has-error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input').append(error);
        }


});

       
        $(document).ready(function(){
            var validate = $("#tutorvalidation").validate({

            rules: {
                name: {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                },
                message: {
                    required: true,
                    minlength: 10,
                    maxlength: 200,
                },
                agree: "required"
            },
            messages: {
                name: "Fullname is required",
                email: "Email is required",
                subject: "Mobile number is required",
                message: "City is required",
                
               
        },

        // invalidHandler: function(form, validator) {
        //  $('html, body').animate({scrollTop: '0px'}, 300);      
        // }
       
      }); 
        


    });