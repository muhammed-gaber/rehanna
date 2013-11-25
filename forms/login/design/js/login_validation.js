var tries_counter = 1;
function check_exist(user_name, user_password){
    var funcReturned;
    $.ajaxSetup({
        async: false
    });
    $.post(
        'design/checkuser_exist.php',
        {
            'username': user_name, 
            'password': user_password
        },
        function(data) {
            funcReturned = jQuery.parseJSON(data);
        }
        );
    $.ajaxSetup({
        async: true
    });
    alert(funcReturned);
    return funcReturned;
}

function block(){
    if (tries_counter === 7) {
        window.location.href = "design/login_block.php";
    }
    tries_counter = tries_counter + 1;
    $('#lbl_error').text("اسم المستخدم او كلمة السر غير صحيحة");
}

$(window).load(function() {
    $('#submit').click(function() {
        $('#login').validate({
            rules: {
                username: {
                    required: true,
                    minlength: 4,
                    maxlength: 25
                },
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 25
                }
            },
            messages: {
                username: {
                    required: "",
                    minlength: jQuery.format(""),
                    maxlength: jQuery.format("")
                },
                password: {
                    required: "",
                    minlength: jQuery.format(""),
                    maxlength: jQuery.format("")
                }
            }
        });
        if (!$('#login').valid()) {
            block();
            return false;
        } else {
            if (!check_exist($('#username').val(), $('#password').val())){   
                block();
                return false;
            }
        }
    });
});