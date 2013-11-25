<?php

session_start();

//define the root file then include the file includes 
define("INC", "../../");
require INC . "includes/directors.php";
require root . '/libs/db.php';
require root . '/libs/users/users_operation.php';
require root . '/libs/validation/save_inputs.php';
require root . '/libs/validation/validation_inputs.php';

//code
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
        return FALSE;
    }

    $user_info = users::select_by_username_password($username, $password);
    if (count($user_info) == 0) {
        return FALSE;
    }
    if (!users::check_login($user_info["sys_users_id"])) {
        return "aleardy_loged";
    }
    $_SESSION["user_info"] = $user_info;
    
}




//include the tpl
require design_url . '/login_tpl.php';

