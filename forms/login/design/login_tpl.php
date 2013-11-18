
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>ريحانة للعطور| عميل جديد </title>

        <script type='text/javascript' src='<?=design_url?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?=design_url?>/css/login_style.css">
        <script type='text/javascript' src="<?=design_url?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?=design_url?>/js/script.js"></script>


    </head>
    <body>
        <!-- multistep form -->
        <form id="login" method="post" action="login_execution.php">
                <p><input id="username" name="username" type="text" placeholder="UserName" ></p>
                <p><input id="password" name="password" type="password" placeholder="Password"></p>
                <p><label   id="lbl_error"  ></label></p>
                <p><input type="submit" name="submit" id="submit" value="Log in" ></p>&nbsp;
                <p><a href="">Forgot your password?</a><a href="">Register</a></p>
        </form>

    </body>


</html>

