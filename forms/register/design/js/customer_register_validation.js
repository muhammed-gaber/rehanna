$(window).load(function() {
    $('#submit').click(function() {
        $('#register_form').validate({
            rules: {
                fullname: {
                    minlength: 4,
                    maxlength: 150,
                    textonly : true,
                    Space    :true
                },
                address:{
                    minlength: 5
                },
                email:{
                    minlength: 5,
                    email    :true
                },
                Phone_Num:{
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
                fullname: {
                    minlength:jQuery.format("الاسم ثنائى على الاقل"),
                    maxlength:jQuery.format("الاسم تعدى الحد لاقصى"),
                    textonly :jQuery.format("الاسم حروف فقط"),
                    Space    :jQuery.format("ادخل الاسم ثنائى على الاقل")
                },
                address:{
                    minlength:jQuery.format("العنوان غير كافى")
                },
                email:{
                    minlength:jQuery.format("البريد الالكترونى غير صحيح"),
                    email    :jQuery.format("العنوان غير كافى")
                },
                Phone_Num:{
                    minlength:jQuery.format("رقم الهاتف غير صحيح"),
                    maxlength:jQuery.format("رقم الهاتف غير صحيح")
                },
                gender:{
                    required: jQuery.format("اختار نوع العميل")
                },
                job_type:{
                    required: jQuery.format("اختار نوع المهنة")
                },
                married:{
                    required: jQuery.format("اختر الحالة الاجتماعية")
                },
                choose_category:{
                    required: jQuery.format("اختر نوع ال")
                },
                choose_type:{
                    required: jQuery.format("رقم الهاتف غير صحيح")
                },
                concentration:{
                    required: jQuery.format("رقم الهاتف غير صحيح")
                }
            }
        });
        jQuery.validator.addMethod(
            "textonly", 
            function(value, element)
            {
                valid = false;
                check =/^[a-zA-Z_0-9 ]\x00-\x80+$/.test(value);
                if(check==false)
                    valid = true;
                return this.optional(element) || valid;
            });
                
        jQuery.validator.addMethod("Space", function(value, element) { 
            return value.indexOf(" ") >0; 
        });
        if (!$('#register_form').valid()) {
            return false;
        }
    });
});