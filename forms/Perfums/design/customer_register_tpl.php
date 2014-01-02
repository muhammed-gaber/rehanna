
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>ريحانة للعطور| عميل جديد</title>

        <script type='text/javascript' src='<?= design_url ?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?= design_url ?>/css/login_style.css">
        <script type='text/javascript' src="<?= design_url ?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?= design_url ?>/js/customer_register_validation.js"></script>

    </head>
    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="post" id="register_form">
                    <fieldset id="first">
                        <p> <label for="gender">Gender</label>  <input name="gender" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["gender"]) && $results["gender"] == "1") ? "checked" : ""; ?>/> Male <input name="gender" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["gender"]) && $results["gender"] == "2") ? "checked" : ""; ?>/> Female 
                            <label class="error" for="gender" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["gender"])) ? $errors["gender"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="job_type">Job Type</label>  <input name="job_type" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["job_type"]) && $results["job_type"] == "1") ? "checked" : ""; ?>/> Mental <input name="job_type" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["job_type"]) && $results["job_type"] == "2") ? "checked" : ""; ?>/> Muscular 
                            <label class="error" for="job_type" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["job_type"])) ? $errors["job_type"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="job_period">Choose job_period</label>  <input name="job_period" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["job_period"]) && $results["job_period"] == "1") ? "checked" : ""; ?>/> Day <input name="job_period" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["job_period"]) && $results["job_period"] == "2") ? "checked" : ""; ?>/> Night 
                            <label class="error" for="job_period" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["job_period"])) ? $errors["job_period"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="married">Married</label>  <input name="married" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["married"]) && $results["married"] == "1") ? "checked" : ""; ?>/> Single <input name="married" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["married"]) && $results["married"] == "2") ? "checked" : ""; ?>/> Married 
                            <label class="error" for="married" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["married"])) ? $errors["married"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                    </fieldset>
                    <fieldset id="second">
                        <p> <label for="choose_category">Choose Category</label>  <input name="choose_category" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["choose_category"]) && $results["choose_category"] == "1") ? "checked" : ""; ?>/> Casual <input name="choose_category" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["choose_category"]) && $results["choose_category"] == "2") ? "checked" : ""; ?>/> Classic
                            <label class="error" for="choose_category" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["choose_category"])) ? $errors["choose_category"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="age">Age</label>  <input name="age" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["age"]) && $results["age"] == "1") ? "checked" : ""; ?>/> -20 <input name="age" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["age"]) && $results["age"] == "2") ? "checked" : ""; ?>/> +20 
                            <label for="age">Age</label>  <input name="age" type="radio" value="3" <?php echo (!empty($results) && ($_POST) && isset($results["age"]) && $results["age"] == "3") ? "checked" : ""; ?>/> +30 <input name="age" type="radio" value="4" <?php echo (!empty($results) && ($_POST) && isset($results["age"]) && $results["age"] == "4") ? "checked" : ""; ?>/> +40
                            <input name="age" type="radio" value="5" <?php echo (!empty($results) && ($_POST) && isset($results["age"]) && $results["age"] == "5") ? "checked" : ""; ?>/> +50
                            <label class="error" for="age" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["age"])) ? $errors["age"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="choose_type">Choose Type</label>  <input name="choose_type" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["choose_type"]) && $results["choose_type"] == "1") ? "checked" : ""; ?>/> Fruits <input name="choose_type" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["choose_type"]) && $results["choose_type"] == "2") ? "checked" : ""; ?>/> Flowers 
                            <input name="choose_type" type="radio" value="3" <?php echo (!empty($results) && ($_POST) && isset($results["choose_type"]) && $results["choose_type"] == "3") ? "checked" : ""; ?>/> Woods <input name="choose_type" type="radio" value="4" <?php echo (!empty($results) && ($_POST) && isset($results["choose_type"]) && $results["choose_type"] == "4") ? "checked" : ""; ?>/> Spices <input name="choose_type" type="radio" value="5" <?php echo (!empty($results) && ($_POST) && isset($results["choose_type"]) && $results["choose_type"] == "5") ? "checked" : ""; ?>/> organic 
                            <label class="error" for="choose_type" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["choose_type"])) ? $errors["choose_type"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="concentration">Concentration</label>  <input name="concentration" type="radio" value="1" <?php echo (!empty($results) && ($_POST) && isset($results["concentration"]) && $results["concentration"] == "1") ? "checked" : ""; ?>/> Light <input name="concentration" type="radio" value="2" <?php echo (!empty($results) && ($_POST) && isset($results["concentration"]) && $results["concentration"] == "2") ? "checked" : ""; ?>/> Medium 
                            <input name="concentration" type="radio" value="3" <?php echo (!empty($results) && ($_POST) && isset($results["concentration"]) && $results["concentration"] == "3") ? "checked" : ""; ?>/> Strong<input name="concentration" type="radio" value="4" <?php echo (!empty($results) && ($_POST) && isset($results["concentration"]) && $results["concentration"] == "4") ? "checked" : ""; ?>/> Super Strong
                            <label class="error" for="concentration" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["concentration"])) ? $errors["concentration"] : ""; ?></label>
                            <span class="val_gen"></span> </p>
                    </fieldset>
                    <fieldset id="third">
                        <p> <label for="name">Full Name</label> <input name="fullname" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["fullname"])) ? $results["fullname"] : ""; ?>"/> 
                            <label class="error" for="fullname" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["fullname"])) ? $errors["fullname"] : ""; ?></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="Phone_Num">Phone Number</label> <input name="Phone_Num" type="text" value="<?php echo (!empty($results) && ($_POST) && isset($results["Phone_Num"])) ? $results["Phone_Num"] : ""; ?>"/> 
                            <label class="error" for="Phone_Num" style="color: red"><?php echo (!empty($errors) && ($_POST) && isset($errors["Phone_Num"])) ? $errors["Phone_Num"] : ""; ?></label>
                            <span class="val_fname"></span> </p>
                    </fieldset>
                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>