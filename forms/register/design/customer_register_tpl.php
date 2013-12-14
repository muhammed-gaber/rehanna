<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>ريحانة للعطور| عميل جديد</title>

        <script type='text/javascript' src='<?=design_url?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?=design_url?>/css/login_style.css">
        <script type='text/javascript' src="<?=design_url?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?=design_url?>/js/customer_register_validation.js"></script>

    </head>
    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="post" id="register_form">
                    <fieldset id="first">
                        <p> <label for="gender">Gender</label>  <input name="gender" type="radio" value="1" /> Male <input name="gender" type="radio" value="2" /> Female 
                            <label class="error" for="gender" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="job_type">Job Type</label>  <input name="job_type" type="radio" value="1" /> Mental <input name="job_type" type="radio" value="2" /> Muscular 
                            <label class="error" for="job_type" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="married">Married</label>  <input name="married" type="radio" value="1" /> Single <input name="married" type="radio" value="2" /> Married 
                            <label class="error" for="married" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                    </fieldset>
                    <fieldset id="second">
                        <p> <label for="choose_category">Choose Category</label>  <input name="choose_category" type="radio" value="1" /> Classic <input name="choose_category" type="radio" value="2" /> Casual 
                            <label class="error" for="choose_category" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="choose_type">Choose Type</label>  <input name="choose_type" type="radio" value="1" /> Fruits <input name="choose_type" type="radio" value="2" /> Flowers 
                            <input name="choose_type" type="radio" value="3" /> Woods <input name="choose_type" type="radio" value="4" /> Spices <input name="choose_type" type="radio" value="5" /> organic 
                            <label class="error" for="choose_type" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="concentration">Concentration</label>  <input name="concentration" type="radio" value="1" /> Light <input name="concentration" type="radio" value="2" /> Medium 
                            <input name="concentration" type="radio" value="3" /> Strong<input name="concentration" type="radio" value="4" /> Super Strong
                            <label class="error" for="concentration" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                    </fieldset>
                    <fieldset id="third">
                        <p> <label for="name">Full Name</label> <input name="fullname" type="text" /> 
                            <label class="error" for="fullname" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Address</label> <input name="address" type="text" /> 
                            <label class="error" for="address" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="email">Email</label> <input name="email" type="text" />
                            <label class="error" for="email" style="color: red"></label>
                            <span class="val_email"></span> </p>
                        <p> <label for="Phone_Num">Phone Number</label> <input name="Phone_Num" type="text" /> 
                            <label class="error" for="Phone_Num" style="color: red"></label>
                            <span class="val_fname"></span> </p>
                    </fieldset>
                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>