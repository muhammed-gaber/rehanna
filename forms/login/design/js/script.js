var tries_counter = 0;


function block() {
    alert();
    var current_fs, next_fs;  //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    if (animating)
        return false;
    animating = true;
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50) + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'transform': 'scale(' + scale + ')'});
            next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
}
function check_exist(username, password)
{
    var funcReturned;
    $.ajaxSetup({async: false});
    $.post(
            'checkexist.php',
            {
                'username': username.value, 'password': password.value
            },
    function(data) {
        funcReturned = data;
    }
    );
    $.ajaxSetup({async: true});
    return funcReturned;
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
            if (tries_counter === 3) {
                block();
            } else {
                tries_counter = tries_counter + 1;
                $('#lbl_error').text("البيانات خطا");
                return false;
            }
        } else {
            if (tries_counter === 3) {
                block();
            } else {
                if (!check_exist($('#username').val(), $('#password').val()))
                {
                    tries_counter = tries_counter + 1;
                    $('#lbl_error').text("خطا");
                    return false;
                }
            }
        }
    });
});