<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>ريحانة للعطور| شريك جديد</title>

        <script type='text/javascript' src='<?= design_url ?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?= design_url ?>/css/login_style.css">
        <script type='text/javascript' src="<?= design_url ?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?= design_url ?>/js/emp_register_validation.js"></script>

    </head>

    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="post" id="register_form">
                    <p> <label for="name">Full Name</label> <input name="fullname" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["fullname"])) ? $results["fullname"] : ""; ?>"/> 
                        <label class="error" for="fullname" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["fullname"])) ? $errors["fullname"] : ""; ?></label>
                        <span class="val_fname"></span> </p>
                    <p> <label for="owner_proportion">owner_proportion</label> <input name="owner_proportion" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["owner_proportion"])) ? $results["owner_proportion"] : ""; ?>"/> 
                        <label class="error" for="owner_proportion" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["owner_proportion"])) ? $errors["owner_proportion"] : ""; ?></label>
                        <span class="val_fname"></span> </p> 
                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>