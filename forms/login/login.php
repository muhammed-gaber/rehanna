<?php

session_start();
//define the root file then include the file includes 
define("INC", "../../");
require INC . "includes/directors.php";
require root . '/libs/db.php';
require root . '/libs/functions/user_functions.php';
require root . '/libs/users/users_operation.php';


//page
$menu_details = array(
    array("menu_link" => "interface.php?page=home", "menu_caption" => "Home"),
    array("menu_link" => "interface.php?page=about", "menu_caption" => "About Us"),
    array("menu_link" => "interface.php?page=contact", "menu_caption" => "Contact Us"),
    array("menu_link" => "interface.php?page=faq", "menu_caption" => "FAQ"),
);

//code
$error = TRUE;
$do = isset($_GET['do']) ? $_GET['do'] : null;
switch ($do) {

    default :
        include root . '/libs/functions/login.php';
        break;
    case "logout":
        unset($_SESSION);
        setcookie('user_id', 1, time() - ((3600 * 24)), '/');
        $content = '../Home/index.php';
        break;
}

//include the tpl
require INC . '/index.php';

