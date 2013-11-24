var tries_counter = 1;

function check_exist(username, password){
    var funcReturned;
    $.ajaxSetup({
        async: false
    });
    $.post(
        'design/checkuser_exist.php',
        {
            'username': username.value, 
            'password': password.value
        },
        function(data) {
            funcReturned = data;
        }
        );
    $.ajaxSetup({
        async: true
    });
    return funcReturned;
}

function block(){
    if (tries_counter === 7) {
        window.location.href = "design/login_block.php";
    }
    tries_counter = tries_counter + 1;
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
            $('#lbl_error').text("البيانات خطا");
            return false;
            
        } else {
            if (!check_exist($('#username').val(), $('#password').val()))
            {
                block();
                $('#lbl_error').text("خطا");
                return false;
            }else{
                return true;
            }
        }
    });
});