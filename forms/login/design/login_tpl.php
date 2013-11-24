
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>ريحانة للعطور| عميل جديد </title>

        <script type='text/javascript' src='<?=design_url?>/js/jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?=design_url?>/css/login_style.css">
        <script type='text/javascript' src="<?=design_url?>/js/jquery.validate.js"></script>
        <script type="text/javascript" src="<?=design_url?>/js/login_validation.js"></script>


    </head>
    <body>
        <!-- multistep form -->
        <form id="login" method="post" action="login_execution.php" style="border: 2">
            <table>
                <tr>
                    <td colspan="2">
                        <input id="username" name="username" type="text" placeholder="UserName" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input id="password" name="password" type="password" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" id="submit" value="Log in" ></td>
                    <td><a href="">Forgot your password?</a> | <a href="">Register</a></td>
                </tr>
                <tr>
                    <td colspan="2"><label id="lbl_error"  ></label></td>
                </tr>
            </table>

        </form>

    </body>


</html>

