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
require root . '/libs/validation/validation_fields.php';

//page
$menu_details = array(
    array("menu_link" => "interface.php?page=home", "menu_caption" => "Home"),
    array("menu_link" => "interface.php?page=about", "menu_caption" => "About Us"),
    array("menu_link" => "interface.php?page=contact", "menu_caption" => "Contact Us"),
    array("menu_link" => "interface.php?page=faq", "menu_caption" => "FAQ"),
);
$errors = array();
$customer_info = array();
$user_info = array();
$results = array();
$type = ($_GET) ? $_GET["do"] : NULL;
switch ($type) {
    case "employee":
        if (!empty($_POST)) {
            $customer_info["fullname"] = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);
            $customer_info["email"] = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
            $customer_info["job"] = filter_input(INPUT_POST, "job", FILTER_SANITIZE_STRING);
            $customer_info["salary"] = filter_input(INPUT_POST, "salary", FILTER_VALIDATE_FLOAT);
            $customer_info["address"] = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
            $customer_info["married"] = filter_input(INPUT_POST, "married", FILTER_SANITIZE_STRING);
            $customer_info["gender"] = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);
            $customer_info["birthdate"] = filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_STRING);
            $customer_info["Phone_Num_1"] = filter_input(INPUT_POST, "Phone_Num_1", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["Phone_Num_2"] = filter_input(INPUT_POST, "Phone_Num_2", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["Phone_Num_3"] = filter_input(INPUT_POST, "Phone_Num_3", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["certificate"] = filter_input(INPUT_POST, "certificate", FILTER_SANITIZE_STRING);

            $user_info["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
            $user_info["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
            $user_info["repassword"] = filter_input(INPUT_POST, "repassword", FILTER_SANITIZE_STRING);



            if (inputs_validation::vaidateFullText($customer_info["fullname"], TRUE)) {
                $errors["fullname"] = inputs_validation::vaidateFullText($customer_info["fullname"], TRUE);
            }
            if (inputs_validation::validateText($customer_info["address"], TRUE)) {
                $errors["address"] = inputs_validation::validateText($customer_info["address"], TRUE);
            }
            if (inputs_validation::validateEmail($customer_info["email"], TRUE)) {
                $errors["email"] = inputs_validation::validateEmail($customer_info["email"], TRUE);
            }
            if (inputs_validation::validatePhoneNumber($customer_info["Phone_Num_1"], TRUE)) {
                $errors["Phone_Num_1"] = inputs_validation::validatePhoneNumber($customer_info["Phone_Num_1"], TRUE);
            }
            if (inputs_validation::validatePhoneNumber($customer_info["Phone_Num_2"])) {
                $errors["Phone_Num_2"] = inputs_validation::validatePhoneNumber($customer_info["Phone_Num_2"]);
            }
            if (inputs_validation::validatePhoneNumber($customer_info["Phone_Num_3"])) {
                $errors["Phone_Num_3"] = inputs_validation::validatePhoneNumber($customer_info["Phone_Num_3"]);
            }
            if (inputs_validation::validateCertification($customer_info["certificate"], TRUE)) {
                $errors["certificate"] = inputs_validation::validateCertification($customer_info["certificate"], TRUE);
            }
            if (inputs_validation::validateDate($customer_info["birthdate"], TRUE)) {
                $errors["birthdate"] = inputs_validation::validateDate($customer_info["birthdate"], TRUE);
            }
            if (inputs_validation::validateChecked($customer_info["gender"])) {
                $errors["gender"] = inputs_validation::validateChecked($customer_info["gender"]);
            }
            if (inputs_validation::validateChecked($customer_info["married"])) {
                $errors["married"] = inputs_validation::validateChecked($customer_info["married"]);
            }
            if (inputs_validation::validateDate($customer_info["birthdate"], TRUE)) {
                $errors["birthdate"] = inputs_validation::validateDate($customer_info["birthdate"], TRUE);
            }
            if (inputs_validation::validateChecked($customer_info["job"])) {
                $errors["job"] = inputs_validation::validateChecked($customer_info["job"]);
            }
            if (inputs_validation::validateFloatNumber($customer_info["salary"], TRUE)) {
                $errors["salary"] = inputs_validation::validateFloatNumber($customer_info["salary"], TRUE);
            }
            if (inputs_validation::validateUserName($user_info["username"], TRUE)) {
                $errors["username"] = inputs_validation::validateUserName($user_info["username"], TRUE);
            }
            if (inputs_validation::validatePassword($user_info["password"], TRUE)) {
                $errors["password"] = inputs_validation::validatePassword($user_info["password"], TRUE);
            }
            if (inputs_validation::validateRePassword($user_info["password"], $user_info["repassword"], TRUE)) {
                $errors["repassword"] = inputs_validation::validateRePassword($user_info["password"], $user_info["repassword"], TRUE);
            }
            if (empty($errors)) {
                employee::insertNewEmployee($customer_info);
                header('Location: ../Home/');
            } else {
                $results = $_POST;
                $content = design_url . '/employee_register_tpl.php';
            }
        } else {
            $content = design_url . '/employee_register_tpl.php';
        }
        break;
    case "trader":
        if (!empty($_POST)) {
            $trader_info["fullname"] = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);
            $trader_info["address"] = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
            $trader_info["Phone_Num_1"] = filter_input(INPUT_POST, "Phone_Num_1", FILTER_SANITIZE_NUMBER_INT);
            $trader_info["Phone_Num_2"] = filter_input(INPUT_POST, "Phone_Num_2", FILTER_SANITIZE_NUMBER_INT);
            $trader_info["Phone_Num_3"] = filter_input(INPUT_POST, "Phone_Num_3", FILTER_SANITIZE_NUMBER_INT);
            $trader_info["trader_type"] = filter_input(INPUT_POST, "trader_type", FILTER_SANITIZE_NUMBER_INT);
            $trader_info["trader_category"] = filter_input(INPUT_POST, "trader_category", FILTER_SANITIZE_NUMBER_INT);

            if (inputs_validation::validateCompanyName($trader_info["fullname"], TRUE)) {
                $errors["fullname"] = inputs_validation::validateCompanyName($trader_info["fullname"], TRUE);
            }
            if (inputs_validation::validateText($trader_info["address"], TRUE)) {
                $errors["address"] = inputs_validation::validateText($trader_info["address"], TRUE);
            }
            if (inputs_validation::validatePhoneNumber($trader_info["Phone_Num_1"], TRUE)) {
                $errors["Phone_Num_1"] = inputs_validation::validatePhoneNumber($trader_info["Phone_Num_1"], TRUE);
            }
            if (inputs_validation::validatePhoneNumber($trader_info["Phone_Num_2"])) {
                $errors["Phone_Num_2"] = inputs_validation::validatePhoneNumber($trader_info["Phone_Num_2"]);
            }
            if (inputs_validation::validatePhoneNumber($trader_info["Phone_Num_3"])) {
                $errors["Phone_Num_3"] = inputs_validation::validatePhoneNumber($trader_info["Phone_Num_3"]);
            }
            if (inputs_validation::validateChecked($trader_info["trader_type"])) {
                $errors["trader_type"] = inputs_validation::validateChecked($trader_info["trader_type"]);
            }
            if (inputs_validation::validateChecked($trader_info["trader_category"])) {
                $errors["trader_category"] = inputs_validation::validateChecked($trader_info["trader_category"]);
            }

            if (empty($errors)) {
                trader::insertNewTrader($trader_info);
                header('Location: ../Home/');
            } else {
                $results = $_POST;
                $content = design_url . '/traders_register_tpl.php';
            }
        } else {
            $content = design_url . '/traders_register_tpl.php';
        }
        break;
    case "owner":
        if (!empty($_POST)) {
            $owner_info["fullname"] = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);
            $owner_info["owner_proportion"] = filter_input(INPUT_POST, "owner_proportion", FILTER_VALIDATE_FLOAT);


            if (inputs_validation::vaidateFullText($owner_info["fullname"], TRUE)) {
                $errors["fullname"] = inputs_validation::vaidateFullText($owner_info["fullname"], TRUE);
            }
            if (inputs_validation::validateFloatNumber($owner_info["owner_proportion"], TRUE)) {
                $errors["owner_proportion"] = inputs_validation::validateFloatNumber($owner_info["owner_proportion"], TRUE);
            }

            if (empty($errors)) {
                owner::insertNewOwner($owner_info);
                header('Location: ../Home/');
            } else {
                $results = $_POST;
                $content = design_url . '/owners_register_tpl.php';
            }
        } else {
            $content = design_url . '/owners_register_tpl.php';
        }
        break;
    default:
        if (!empty($_POST)) {
            $customer_info["fullname"] = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_STRING);
            $customer_info["Phone_Num"] = filter_input(INPUT_POST, "Phone_Num", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["gender"] = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["job_type"] = filter_input(INPUT_POST, "job_type", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["job_period"] = filter_input(INPUT_POST, "job_period", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["age"] = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["married"] = filter_input(INPUT_POST, "married", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["choose_category"] = filter_input(INPUT_POST, "choose_category", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["choose_type"] = filter_input(INPUT_POST, "choose_type", FILTER_SANITIZE_NUMBER_INT);
            $customer_info["concentration"] = filter_input(INPUT_POST, "concentration", FILTER_SANITIZE_NUMBER_INT);

            if (inputs_validation::vaidateFullText($customer_info["fullname"])) {
                $errors["fullname"] = inputs_validation::vaidateFullText($customer_info["fullname"]);
            }
            if (inputs_validation::validatePhoneNumberCustomer($customer_info["Phone_Num"], TRUE)) {
                $errors["Phone_Num"] = inputs_validation::validatePhoneNumberCustomer($customer_info["Phone_Num"]);
            }
            if (inputs_validation::validateChecked($customer_info["gender"])) {
                $errors["gender"] = inputs_validation::validateChecked($customer_info["gender"]);
            }
            if (inputs_validation::validateChecked($customer_info["age"])) {
                $errors["age"] = inputs_validation::validateChecked($customer_info["age"]);
            }
            if (inputs_validation::validateChecked($customer_info["job_period"])) {
                $errors["job_period"] = inputs_validation::validateChecked($customer_info["job_period"]);
            }
            if (inputs_validation::validateChecked($customer_info["job_type"])) {
                $errors["job_type"] = inputs_validation::validateChecked($customer_info["job_type"]);
            }
            if (inputs_validation::validateChecked($customer_info["married"])) {
                $errors["married"] = inputs_validation::validateChecked($customer_info["married"]);
            }
            if (inputs_validation::validateChecked($customer_info["choose_category"])) {
                $errors["choose_category"] = inputs_validation::validateChecked($customer_info["choose_category"]);
            }
            if (inputs_validation::validateChecked($customer_info["choose_type"])) {
                $errors["choose_type"] = inputs_validation::validateChecked($customer_info["choose_type"]);
            }
            if (inputs_validation::validateChecked($customer_info["concentration"])) {
                $errors["concentration"] = inputs_validation::validateChecked($customer_info["concentration"]);
            }

            if (empty($errors)) {
                cutomer::insertNewCustomer($customer_info);
                header('Location: ../Home/');
            } else {
                $results = $_POST;
                $content = design_url . '/customer_register_tpl.php';
            }
        } else {
            $content = design_url . '/customer_register_tpl.php';
        }
        break;
}


//include the tpl
require INC . '/index.php';
