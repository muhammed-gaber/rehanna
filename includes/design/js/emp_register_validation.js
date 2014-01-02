$(window).load(function() {
    $('#submit').click(function() {
        $('#register_form').validate({
            ignore: "input[type='text']:hidden",
            rules: {
                fullname: {
                    required: true,
                    minlength: 4,
                    maxlength: 150,
                    textonly: true,
                    Space: true
                },
                address: {
                    required: true,
                    minlength: 5,
                    maxlength: 255,
                    Space: true
                },
                email: {
                    required: true,
                    email: true
                },
                Phone_Num_1: {
                    required: true,
                    minlength: 6,
                    maxlength: 15,
                    digits: true
                },
                Phone_Num_2: {
                    minlength: 6,
                    maxlength: 15,
                    digits: true
                },
                Phone_Num_3: {
                    minlength: 6,
                    maxlength: 15,
                    digits: true
                },
                certificate: {
                    required: true,
                    minlength: 6,
                    maxlength: 15,
                    textonly: true
                },
                birthdate: {
                    required: true
                },
                gender: {
                    required: true
                },
                job: {
                    required: true
                },
                salary: {
                    required: true,
                    digits: true
                },
                username: {
                    required: true,
                    minlength: 4,
                    maxlength: 25
                },
                password: {
                    required: true,
                    minlength: 4,
                    maxlength: 25
                },
                repassword: {
                    equalTo: "#password"
                }

            },
            messages: {
                fullname: {
                    required: jQuery.format("لابد من ادخال اسم الموظف"),
                    minlength: jQuery.format("اسم الموظف غير كافى"),
                    maxlength: jQuery.format("اسم الموظف تعدى الحد الاقصى"),
                    textonly: jQuery.format("اسم الموظف لا يمكن ان يحتوى على ارقام"),
                    Space: jQuery.format("اسم الموظف ثنائى على الاقل")
                },
                address: {
                    required: jQuery.format("لابد من ادخال عنوان الموظف"),
                    minlength: jQuery.format("عنوان غير صالح"),
                    maxlength: jQuery.format("العنوان تعدى الحد الاقصى"),
                    Space: jQuery.format("عنوان غير صالح")
                },
                email: {
                    required: jQuery.format("لابد من ادخال البريد الالكترونى الموظف"),
                    email: jQuery.format("البريد الالكترونى غير صالح")
                },
                Phone_Num_1: {
                    required: jQuery.format("لابد من ادخال رقم هاتف واحد على الاقل"),
                    minlength: jQuery.format("رقم هاتف غير صالح"),
                    maxlength: jQuery.format("رقم هاتف غير صالح"),
                    digits: jQuery.format("رقم هاتف غير صالح")
                },
                Phone_Num_2: {
                    minlength: jQuery.format("رقم هاتف غير صالح"),
                    maxlength: jQuery.format("رقم هاتف غير صالح"),
                    digits: jQuery.format("رقم هاتف غير صالح")
                },
                Phone_Num_3: {
                    minlength: jQuery.format("رقم هاتف غير صالح"),
                    maxlength: jQuery.format("رقم هاتف غير صالح"),
                    digits: jQuery.format("رقم هاتف غير صالح")
                },
                certificate: {
                    required: jQuery.format("ادخل مؤهل الموظف"),
                    minlength: jQuery.format("مؤهل غير صالح"),
                    maxlength: jQuery.format("مؤهل غير صالح"),
                    alphanumeric: jQuery.format("مؤهل غير صالح")
                },
                birthdate: {
                    required: jQuery.format("اختر تاريخ ميلاد الموظف")
                },
                gender: {
                    required: jQuery.format("اختر جنس الموظف")
                },
                job: {
                    required: jQuery.format("اختر الوظيفة")
                },
                salary: {
                    required: jQuery.format("اختر راتب الموظف"),
                    digits: jQuery.format("الراتب عبارة عن ارقام فقط")
                },
                username: {
                    required: jQuery.format("لابد من ادخال اسم المستخدم"),
                    minlength: jQuery.format("اسم غير صالح"),
                    maxlength: jQuery.format("الاسم تعدى الحد الاقصى")
                },
                password: {
                    required: jQuery.format("لابد من ادخال كلمة السر"),
                    minlength: jQuery.format("كلمة السر غير كافية"),
                    maxlength: jQuery.format("كلمة السر تعدى الحد الاقصى")
                },
                repassword: {
                    equalTo: jQuery.format("كلمتى السر غير متطابقتين")
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