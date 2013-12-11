<?php

session_start();
//define the root file then include the file includes 
define("INC", "../../");
require INC . "includes/directors.php";
require root . '/libs/functions/user_functions.php';
require root . '/libs/users/users_operation.php';


//page
$menu_details = array(
    array("menu_link" => "interface.php?page=home", "menu_caption" => "Home"),
    array("menu_link" => "interface.php?page=about", "menu_caption" => "About Us"),
    array("menu_link" => "interface.php?page=contact", "menu_caption" => "Contact Us"),
    array("menu_link" => "interface.php?page=faq", "menu_caption" => "FAQ"),
);

$content = design_url . '/login_tpl.php';

//code

$error = TRUE;

function redirect($location) {
    header('location:' . $location . '');
    exit();
}

switch ($_GET["do"]) {
    case "login":
        if ($_POST) {
            $username = isset($_POST["username"]) ? filter_var($_POST["username"]) : null;
            $password = isset($_POST["password"]) ? filter_var($_POST["password"]) : null;
            if ($username == NULL || $password == NULL) {
                $error = FALSE;
                return;
            }
        } elseif (isset($_COOKIE['id'])) {
            session_id($_COOKIE["id"]);
            $info = $_SESSION["id"];
            $user_type = $info["user_type"];
        } else {
            $user_type = null;
            return;  //404
        }


        $user_info = users::selectUSerByUsernameAndPassword($username, $password);
        $user_ip = user_function::getRealIpAddress();
        users::login($users_info["sys_users_id"], $user_ip);
        $_SESSION["user_info"] = $users_info;
        setcookie('user_id', sq(session_id()), time() + ((3600 * 24)), '/');
        $content = '../Home/index.php';
        break;
    case "logout":
        unset($_SESSION);
        setcookie('user_id', 1, time() - ((3600 * 24)), '/');
        break;
    default:
        echo "no operation";  //404
        break;
}

//include the tpl
require INC . '/index.php';

