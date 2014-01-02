<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>ريحانة للعطور| موضف جديد </title>

        <script type='text/javascript' src='<?= design_url ?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?= design_url ?>/css/login_style.css">
        <script type='text/javascript' src="<?= design_url ?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?= design_url ?>/js/traders_register_validation.js"></script>

    </head>
    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="post" id="register_form">
                    <p> <label for="name">Company Name</label> <input name="fullname" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["fullname"])) ? $results["fullname"] : ""; ?>"/> 
                        <label class="error" for="fullname" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["fullname"])) ? $errors["fullname"] : ""; ?></label>
                        <span class="val_fname"></span> </p> 
                    <p> <label for="name">Company Address</label> <input name="address" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["address"])) ? $results["address"] : ""; ?>"/> 
                        <label class="error" for="address" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["address"])) ? $errors["address"] : ""; ?></label>
                        <span class="val_fname"></span> </p> 
                    <p> <label for="name">Phone Num.1</label> <input name="Phone_Num_1" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num_1"])) ? $results["Phone_Num_1"] : ""; ?>"/> 
                        <label class="error" for="Phone_Num_1" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num_1"])) ? $errors["Phone_Num_1"] : ""; ?></label>
                        <span class="val_fname"></span> </p> 
                    <p> <label for="name">Phone Num.2</label> <input name="Phone_Num_2" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num_2"])) ? $results["Phone_Num_2"] : ""; ?>"/> 
                        <label class="error" for="Phone_Num_2" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num_2"])) ? $errors["Phone_Num_2"] : ""; ?></label>
                        <span class="val_fname"></span> </p> 
                    <p> <label for="name">Phone Num.3</label> <input name="Phone_Num_3" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num_3"])) ? $results["Phone_Num_3"] : ""; ?>"/>
                        <label class="error" for="Phone_Num_3" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num_3"])) ? $errors["Phone_Num_3"] : ""; ?></label>
                        <span class="val_fname"></span> </p> 
                    <p> <label for="trader_type">Trader Type</label>  <input name="trader_type" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["trader_type"]) && $results["trader_type"] == "1") ? "checked" : ""; ?>/> Customer <input name="trader_type" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["trader_type"]) && $results["trader_type"] == "2") ? "checked" : ""; ?>/> Supplier
                        <input name="trader_type" type="radio" value="3" <?php echo (!empty($results) && ($_POST) && isset($results["trader_type"]) && $results["trader_type"] == "3") ? "checked" : ""; ?>/> Both
                        <label class="error" for="trader_type" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["trader_type"])) ? $errors["trader_type"] : ""; ?></label>
                        <span class="val_gen"></span> </p>
                    <p> <label for="trader_category">Trader Category</label>  <input name="trader_category" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["trader_category"]) && $results["trader_category"] == "1") ? "checked" : ""; ?>/> Wholesaler <input name="trader_category" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["trader_category"]) && $results["trader_category"] == "2") ? "checked" : ""; ?>/>Half Inter 
                        <label class="error" for="trader_category" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["trader_category"])) ? $errors["trader_category"] : ""; ?></label>
                        <span class="val_gen"></span> </p>

                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>