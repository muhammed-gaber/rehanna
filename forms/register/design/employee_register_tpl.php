<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="author" content="Amsul - http://amsul.ca">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">


        <link rel="stylesheet" href="<?=design_url?>/plugins/datepicker/lib/themes/default.css" id="theme_base">
        <link rel="stylesheet" href="<?=design_url?>/plugins/datepicker/lib/themes/default.date.css" id="theme_date">
        <link rel="stylesheet" href="<?=design_url?>/plugins/datepicker/lib/themes/default.time.css" id="theme_time">

        <title>ريحانة للعطور| موضف جديد</title>

        <script type='text/javascript' src='<?=design_url?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?=design_url?>/css/login_style.css">
        <script type='text/javascript' src="<?=design_url?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?=design_url?>/js/emp_register_validation.js"></script>

    </head>

    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="post" id="register_form">

                    <p class="validate_msg">Please fix the errors below!</p>
                    <fieldset id="first">
                        <p> <label for="name">Full Name</label> <input name="fullname" type="text" /> 
                            <label class="error" for="fullname" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Address</label> <input name="address" type="text" /> 
                            <label class="error" for="address" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="email">Email</label> <input name="email" type="text" />
                            <label class="error" for="email" style="color: red"></label>
                            <span class="val_email"></span> </p>
                        <p> <label for="name">Phone Num.1</label> <input name="Phone_Num_1" type="text" /> 
                            <label class="error" for="Phone_Num_1" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Phone Num.2</label> <input name="Phone_Num_2" type="text" /> 
                            <label class="error" for="Phone_Num_2" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Phone Num.3</label> <input name="Phone_Num_3" type="text" />
                            <label class="error" for="Phone_Num_3" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Certification</label> <input name="certificate" type="text" />
                            <label class="error" for="certificate" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="gender">Birth Date</label>
                            <input name="birthdate" class="fieldset__input js__datepicker" type="text" placeholder="Birth Date">
                            <label class="error" for="birthdate" style="color: red"></label>
                            <span class="val_bday"></span> </p>
                        <p> <label for="gender">Gender</label>  <input name="gender" type="radio" value="m" /> Male <input name="gender" type="radio" value="f" /> Female 
                            <label class="error" for="gender" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                    </fieldset>
                    <fieldset id="second">
                        <p> <label for="name">Job</label> <input name="job" type="text" /> 
                            <label class="error" for="job" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">salary</label> <input name="salary" type="text" /> 
                            <label class="error" for="salary" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                    </fieldset>
                    <fieldset id="third">
                        <p> <label for="name">User Name</label> <input name="username" type="text" /> 
                            <label class="error" for="username" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="password">Password</label>  <input name="password"  type="password" /> 
                            <label class="error" for="password" style="color: red"></label>
                            <span class="val_pass"></span> </p>
                        <p> <label for="repassword">Retype Password</label>  <input name="repassword" type="password" /> 
                            <label class="error" for="repassword" style="color: red"></label>
                            <span class="val_pass2"></span> </p>
                    </fieldset>
                    <script src="<?=design_url?>/plugins/datepicker/lib/picker.js"></script>
                    <script src="<?=design_url?>/plugins/datepicker/lib/picker.date.js"></script>
                    <script src="<?=design_url?>/plugins/datepicker/lib/picker.time.js"></script>
                    <script src="<?=design_url?>/plugins/datepicker/lib/legacy.js"></script>
                    <script src="<?=design_url?>/plugins/datepicker/demo/scripts/main.js"></script>
                    <script type="text/javascript">
                        var _gaq = _gaq || [];
                        _gaq.push(['_setAccount', 'UA-36321179-2']);
                        _gaq.push(['_trackPageview']);
                        (function() {
                            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                        })();
                    </script>
                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>