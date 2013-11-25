<?php

session_start();
//define the root file then include the file includes 
define("INC", "../../");
require INC . "includes/directors.php";
require root . '/libs/db.php';
require root . '/libs/users/users_operation.php';
require root . '/libs/validation/save_inputs.php';
require root . '/libs/validation/validation_inputs.php';


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

function username_validation($user_name) {
    if (empty($user_name)) {
        return FALSE;
    }if (fields_validation::checkTextstart($user_name)) {
        return FALSE;
    }if (fields_validation::checkMinTextLength($user_name)) {
        return FALSE;
    }if (fields_validation::checkMaxTextLength($user_name)) {
        return FALSE;
    }
}

function password_validation($pass) {
    if (empty($pass)) {
        return FALSE;
    }if (fields_validation::checkTextstart($pass)) {
        return FALSE;
    }if (fields_validation::checkMinTextLength($pass)) {
        return FALSE;
    }if (fields_validation::checkMaxTextLength($pass)) {
        return FALSE;
    }
}

if ($_POST) {
    $username = isset($_POST["username"]) ? save_inputs::secure($_POST["username"]) : null;
    $password = isset($_POST["password"]) ? save_inputs::secure($_POST["password"]) : null;
    if (!username_validation($username) || !password_validation($password)) {
        $error = FALSE;
    }
    $users_info = users::select_by_username_password($username, $password);
    if (count($users_info) == 0) {
        $error = FALSE;
    } else if (count(users::check_login($users_info["sys_users_id"])) > 0) {
        $error = FALSE;
    }
    if ($error) {
        var_dump($users_info);
        users::login($users_info["user_id"], $user_ip);
        $_SESSION["user_info"] = $users_info;
        $content = '../Home/index.php';
    }
}



//include the tpl
require INC . '/index.php';

