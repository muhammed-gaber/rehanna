
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="author" content="Amsul - http://amsul.ca">

        <meta name="viewport" content="width=device-width">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">


        <link rel="stylesheet" href="<?= design_url ?>/plugins/datepicker/lib/themes/default.css" id="theme_base">
        <link rel="stylesheet" href="<?= design_url ?>/plugins/datepicker/lib/themes/default.date.css" id="theme_date">
        <link rel="stylesheet" href="<?= design_url ?>/plugins/datepicker/lib/themes/default.time.css" id="theme_time">

        <title>ريحانة للعطور| موضف جديد</title>

        <script type='text/javascript' src='<?= design_url ?>/js/jquery.js'></script>
        <script type='text/javascript' src='<?= design_url ?>/js/function.js'></script>
        <link rel="stylesheet" type="text/css" href="<?= design_url ?>/css/login_style.css">
        <script type='text/javascript' src="<?= design_url ?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?= design_url ?>/js/emp_register_validation.js"></script>

    </head>

    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="POST" id="register_form">

                    <p class="validate_msg">Please fix the errors below!</p>
                    <fieldset id="first">
                        <p> <label for="name">Full Name</label> <input name="fullname" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["fullname"])) ? $results["fullname"] : ""; ?>"/> 
                            <label class="error" for="fullname" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["fullname"])) ? $errors["fullname"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Address</label> <input name="address" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["address"])) ? $results["address"] : ""; ?>"/> 
                            <label class="error" for="address" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["address"])) ? $errors["address"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="email">Email</label> <input name="email" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["email"])) ? $results["email"] : ""; ?>"/>
                            <label class="error" for="email" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["email"])) ? $errors["email"] : ""; ?></label>
                            <span class="val_email"></span> </p>
                        <p> <label for="name">Phone Num.1</label> <input name="Phone_Num_1" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num_1"])) ? $results["Phone_Num_1"] : ""; ?>"/> 
                            <label class="error" for="Phone_Num_1" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num_1"])) ? $errors["Phone_Num_1"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Phone Num.2</label> <input name="Phone_Num_2" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num_2"])) ? $results["Phone_Num_2"] : ""; ?>"/> 
                            <label class="error" for="Phone_Num_2" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num_2"])) ? $errors["Phone_Num_2"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Phone Num.3</label> <input name="Phone_Num_3" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num_3"])) ? $results["Phone_Num_3"] : ""; ?>"/>
                            <label class="error" for="Phone_Num_3" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num_3"])) ? $errors["Phone_Num_3"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Certification</label> <input name="certificate" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["certificate"])) ? $results["certificate"] : ""; ?>"/>
                            <label class="error" for="certificate" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["certificate"])) ? $errors["certificate"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="birthdate">Birth Date</label>
                            <input name="birthdate" class="fieldset__input js__datepicker" type="text" placeholder="Birth Date" value="<?php echo (!empty($results) && ($_POST) && isset($results["birthdate"])) ? $results["birthdate"] : ""; ?>">
                            <label class="error" for="birthdate" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["birthdate"])) ? $errors["birthdate"] : ""; ?></label>
                            <span class="val_bday"></span> </p>
                        <p> <label for="gender">Gender</label>  <input name="gender" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["gender"]) && $results["gender"] == "1") ? "checked" : ""; ?>/> Male <input name="gender" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["gender"]) && $results["gender"] == "2") ? "checked" : ""; ?>/> Female 
                            <label class="error" for="gender" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["gender"])) ? $errors["gender"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="married">Is married</label>  <input name="married" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["married"]) && $results["married"] == "1") ? "checked" : ""; ?>/> yes <input name="married" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["married"]) && $results["married"] == "2") ? "checked" : ""; ?>/> no 
                            <label class="error" for="married" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["married"])) ? $errors["married"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                    </fieldset>
                    <fieldset id="second">
                        <p> <label for="job">Job</label> <input id="job" name="job" type="hidden" value="<?php echo (!empty($results) && ($_POST) && isset($results["job"])) ? $results["job"] : ""; ?>"/> 

                            <select id="jobs" name="jobs">
                                <option value="" <?php echo (!empty($results) && ($_POST) && isset($results["job"]) && $results["job"] == "") ? "selected" : ""; ?>>اختر وظيفة</option>
                                <option value="1"<?php echo (!empty($results) && ($_POST) && isset($results["job"]) && $results["job"] == "1") ? "selected" : ""; ?>>عامل</option>
                                <option value="2" <?php echo (!empty($results) && ($_POST) && isset($results["job"]) && $results["job"] == "2") ? "selected" : ""; ?>>مساعد بائع</option>
                                <option value="3" <?php echo (!empty($results) && ($_POST) && isset($results["job"]) && $results["job"] == "3") ? "selected" : ""; ?>>بائع</option>
                                <option value="4" <?php echo (!empty($results) && ($_POST) && isset($results["job"]) && $results["job"] == "4") ? "selected" : ""; ?>>امين مخزن</option>     
                            </select>
                            <label class="error" for="job" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["job"])) ? $errors["job"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="salary">salary</label> <input name="salary" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["salary"])) ? $results["salary"] : ""; ?>"/> 
                            <label class="error" for="salary" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["salary"])) ? $errors["salary"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                    </fieldset>
                    <fieldset id="third">
                        <p> <label for="name">User Name</label> <input name="username" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["username"])) ? $results["username"] : ""; ?>"/> 
                            <label class="error" for="username" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["username"])) ? $errors["username"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="password">Password</label>  <input name="password"  type="password" /> 
                            <label class="error" for="password" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["password"])) ? $errors["password"] : ""; ?></label>
                            <span class="val_pass"></span> </p>
                        <p> <label for="repassword">Retype Password</label>  <input name="repassword" type="password" /> 
                            <label class="error" for="repassword" style="color: red"><?php echo (!empty($errors) && ($_POST) && ($_POST)&& isset($errors["repassword"])) ? $errors["repassword"] : ""; ?></label>
                            <span class="val_pass2"></span> </p>
                    </fieldset>
                    <script src="<?= design_url ?>/plugins/datepicker/lib/picker.js"></script>
                    <script src="<?= design_url ?>/plugins/datepicker/lib/picker.date.js"></script>
                    <script src="<?= design_url ?>/plugins/datepicker/lib/picker.time.js"></script>
                    <script src="<?= design_url ?>/plugins/datepicker/lib/legacy.js"></script>
                    <script src="<?= design_url ?>/plugins/datepicker/demo/scripts/main.js"></script>
                    <script type="text/javascript">
                        var _gaq = _gaq || [];
                        _gaq.push(['_setAccount', 'UA-36321179-2']);
                        _gaq.push(['_trackPageview']);
                        (function() {
                            var ga = document.createElement('script');
                            ga.type = 'text/javascript';
                            ga.async = true;
                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(ga, s);
                        })();
                    </script>
                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>