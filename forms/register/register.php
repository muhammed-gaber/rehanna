<?php

define("INC", "../../");
require INC . "includes/directors.php";
require root . '/libs/db.php';
require root . '/libs/functions/user_functions.php';
require root . '/libs/users/rehanna_customer_db.php';
require root . '/libs/users/rehanna_employee_db.php';
require root . '/libs/users/rehanna_owners_db.php';
require root . '/libs/users/rehanna_traders_db.php';
require root . '/libs/users/users_db.php';
require root . '/libs/validation/validation_inputs.php';
require '/libs/register_validation.php';

//page
$menu_details = array(
    array("menu_link" => "interface.php?page=home", "menu_caption" => "Home"),
    array("menu_link" => "interface.php?page=about", "menu_caption" => "About Us"),
    array("menu_link" => "interface.php?page=contact", "menu_caption" => "Contact Us"),
    array("menu_link" => "interface.php?page=faq", "menu_caption" => "FAQ"),
);
$errors = array();
$user_info=array();
$results = array();
$type = ($_GET) ? $_GET["do"] : NULL;
switch ($type) {
    case "employee":
        if (isset($_POST)) {
            $user_info["fullname"] = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);
            $user_info["address"] = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
            $user_info["email"] = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
            $user_info["Phone_Num_1"] = filter_input(INPUT_POST, "Phone_Num_1", FILTER_SANITIZE_NUMBER_INT);
            $user_info["Phone_Num_2"] = filter_input(INPUT_POST, "Phone_Num_2", FILTER_SANITIZE_NUMBER_INT);
            $user_info["Phone_Num_3"] = filter_input(INPUT_POST, "Phone_Num_3", FILTER_SANITIZE_NUMBER_INT);
            $user_info["certificate"] = filter_input(INPUT_POST, "certificate", FILTER_SANITIZE_STRING);
            $user_info["birthdate"] =  filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_STRING);
            $user_info["gender"] =  filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);
            $user_info["birthdate"] = filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_STRING);
            $user_info["job"] = filter_input(INPUT_POST, "job", FILTER_SANITIZE_STRING);
            $user_info["salary"] = filter_input(INPUT_POST, "salary", FILTER_SANITIZE_NUMBER_INT);
            $user_info["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
            $user_info["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
            $user_info["repassword"] =  filter_input(INPUT_POST, "repassword", FILTER_SANITIZE_STRING);

            $errors["fullname"] = inputs_validation::vaidateFullName($user_info["fullname"], TRUE);
            $errors["address"] = inputs_validation::validateAddress( $user_info["address"], TRUE);
            $errors["email"] = inputs_validation::validateEmail($user_info["email"], TRUE);
            $errors["Phone_Num_1"] = inputs_validation::validatePhoneNumber($user_info["Phone_Num_1"], TRUE);
            $errors["Phone_Num_2"] = inputs_validation::validatePhoneNumber($user_info["Phone_Num_2"]);
            $errors["Phone_Num_3"] = inputs_validation::validatePhoneNumber($user_info["Phone_Num_3"]);
            $errors["certificate"] = inputs_validation::validateCertification($user_info["certificate"], TRUE);
            $errors["birthdate"] = inputs_validation::validateDate($user_info["birthdate"], TRUE);
            $errors["gender"] = inputs_validation::validateChecked($user_info["gender"]);
            $errors["birthdate"] = inputs_validation::validateDate($user_info["birthdate"], TRUE);
            $errors["job"] = inputs_validation::validateChecked($user_info["job"]);
            $errors["salary"] = inputs_validation::validateSalary($user_info["salary"], TRUE);
            $errors["username"] = inputs_validation::validateUserName($user_info["username"], TRUE);
            $errors["password"] = inputs_validation::validatePassword($user_info["password"], TRUE);
            $errors["repassword"] = inputs_validation::validateRePassword($user_info["password"], $user_info["repassword"], TRUE);
            if (empty($errors)) {
                
            } else {
                $results = $_POST;
                $content = design_url . '/employee_register_tpl.php';
            }
        } else {
            $content = design_url . '/employee_register_tpl.php';
        }
        break;
    case "trader":
        $content = design_url . '/traders_register_tpl.php';
        break;
    case "owner":
        $content = design_url . '/owners_register_tpl.php';
        break;
    default:
        $content = design_url . '/customer_register_tpl.php';
        break;
}


//include the tpl
require INC . '/index.php';