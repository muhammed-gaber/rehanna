<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>ريحانة للعطور| موضف جديد </title>

        <script type='text/javascript' src='<?=design_url?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?=design_url?>/css/login_style.css">
        <script type='text/javascript' src="<?=design_url?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?=design_url?>/js/traders_register_validation.js"></script>

    </head>
    <body>
        <div id="wrap"> <!--wrap start-->
            <div id="wrap2">  <!--wrap2 start-->

                <h2 class="free_account">Create an free account</h2> 

                <form action="" method="post" id="register_form">
                        <p> <label for="name">Full Name</label> <input name="fullname" type="text" /> 
                            <label class="error" for="fullname" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="name">Company Address</label> <input name="address" type="text" /> 
                            <label class="error" for="address" style="color: red"></label>
                            <span class="val_fname"></span> </p> 
                        <p> <label for="campany_name">Company Name</label> <input name="campany_name" type="text" />
                            <label class="error" for="campany_name" style="color: red"></label>
                            <span class="val_email"></span> </p>
                        <p> <label for="Phone_Num">Phone Number</label> <input name="Phone_Num" type="text" /> 
                            <label class="error" for="Phone_Num" style="color: red"></label>
                            <span class="val_fname"></span> </p>
                        <p> <label for="trader_type">Trader Type</label>  <input name="trader_type" type="checkbox" value="1" /> Customer <input name="trader_type" type="checkbox" value="2" /> Supplier 
                            <label class="error" for="trader_type" style="color: red"></label>
                            <span class="val_gen"></span> </p>
                        <p> <label for="trader_category">Trader Category</label>  <input name="trader_category" type="radio" value="1" /> Wholesaler <input name="trader_category" type="radio" value="2" />Half Inter 
                            <label class="error" for="trader_category" style="color: red"></label>
                            <span class="val_gen"></span> </p>

                    <input id="submit" type="submit" name="submit" value="Register">
                </form>

            </div>  <!--wrap2 end-->
        </div>  <!--wrap start-->
    </body>
</html>