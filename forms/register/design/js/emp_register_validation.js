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
                Phone_Num_1:{
                    required: true,
                    minlength: 6,
                    maxlength: 15
                },
                Phone_Num_2:{
                    minlength: 6,
                    maxlength: 15
                },
                Phone_Num_3:{
                    minlength: 6,
                    maxlength: 15
                },
                certificate:{
                    required: true,
                    minlength: 6,
                    maxlength: 15,
                    alphanumeric: true
                },
                birthdate:{
                    required: true
                },
                gender:{
                    required: true
                },
                job:{
                    required: true,
                    minlength: 4,
                    maxlength: 50,
                    textonly: true
                },
                salary:{
                    required: true,
                    digits: true
                },
                username:{
                    required: true,
                    minlength: 4,
                    maxlength: 25
                },
                password:{
                    required: true,
                    minlength: 4,
                    maxlength: 25
                },
                repassword:{
                    required: true,
                    minlength: 4,
                    maxlength: 25,
                    equalTo: "#password"
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