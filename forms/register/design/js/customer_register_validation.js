$(window).load(function() {
    $('#submit').click(function() {
        $('#register_form').validate({
            rules: {
                fullname: {
                    minlength: 4,
                    maxlength: 150,
                    textonly: true,
                    Space: true
                },
                address: {
                    minlength: 5,
                    maxlength: 255,
                    Space: true
                },
                email: {
                    email: true
                },
                Phone_Num: {
                    minlength: 6,
                    maxlength: 15,
                    digits: true
                },
                gender: {
                    required: true
                },
                job_type: {
                    required: true
                },
                married: {
                    required: true
                },
                choose_category: {
                    required: true
                },
                choose_type: {
                    required: true
                },
                concentration: {
                    required: true
                }

            },
            messages: {
                fullname: {
                    minlength: jQuery.format("الاسم ثنائى على الاقل"),
                    maxlength: jQuery.format("الاسم تعدى الحد لاقصى"),
                    textonly: jQuery.format("الاسم حروف فقط"),
                    Space: jQuery.format("ادخل الاسم ثنائى على الاقل")
                },
                address: {
                    minlength: jQuery.format("العنوان غير كافى"),
                    maxlength: jQuery.format("العنوان تعدى الحد الاقصى"),
                    Space: jQuery.format("العنوان غير كافى")
                },
                email: {
                    email: jQuery.format("العنوان غير كافى")
                },
                Phone_Num: {
                    minlength: jQuery.format("رقم الهاتف غير صحيح"),
                    maxlength: jQuery.format("رقم الهاتف غير صحيح"),
                    digits: jQuery.format("رقم الهاتف غير صحيح")
                },
                gender: {
                    required: jQuery.format("اختار نوع العميل")
                },
                job_type: {
                    required: jQuery.format("اختار نوع المهنة")
                },
                married: {
                    required: jQuery.format("اختر الحالة الاجتماعية")
                },
                choose_category: {
                    required: jQuery.format("لابد من اختيار اجابة")
                },
                choose_type: {
                    required: jQuery.format("لابد من اختيار اجابة")
                },
                concentration: {
                    required: jQuery.format("اختر اجابة")
                }
            }
        });
        jQuery.validator.addMethod(
                "textonly",
                function(value, element)
                {
                    if (value) {
                        valid = false;
                        check = /^[a-zA-Z_0-9 ]\x00-\x80+$/.test(value);
                        if (check === false)
                            valid = true;
                        return this.optional(element) || valid;
                    } else {
                        return true;
                    }
                });

        jQuery.validator.addMethod("Space", function(value, element) {
            if (value) {
                return value.indexOf(" ") > 0;
            } else {
                return true;
            }
        });
        if (!$('#register_form').valid()) {
            return false;
        }
    });
});