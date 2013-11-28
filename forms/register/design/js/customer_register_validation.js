$(window).load(function() {
    $('#submit').click(function() {
        $('#register_form').validate({
            rules: {
                fullname: {
                    required: true,
                    minlength: 4,
                    maxlength: 150,
                    textonly: true
                },
                address:{
                    required: true,
                    minlength: 5,
                    maxlength: 255
                },
                email:{
                    required: true,
                    minlength: 5,
                    maxlength: 255,
                    email:true
                },
                Phone_Num:{
                    required: true,
                    minlength: 6,
                    maxlength: 15
                },
                gender:{
                    required: true
                },
                job_type:{
                    required: true
                },
                married:{
                    required: true
                },
                choose_category:{
                    required: true
                },
                choose_type:{
                    required: true
                },
                concentration:{
                    required: true
                }
                
            },
            messages: {
               
        }
        });
        jQuery.validator.addMethod(
            "textonly", 
            function(value, element)
            {
                valid = false;
                check = /[^-\.a-zA-Z\s\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02AE]/.test(value);
                if(check==false)
                    valid = true;
                return this.optional(element) || valid;
            }, 
            jQuery.format("Please only enter letters, spaces, periods, or hyphens."));
        if (!$('#register_form').valid()) {
           
            return false;
        }
    });
});