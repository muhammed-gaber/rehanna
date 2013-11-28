<?php

define("INC", "../../");
require INC . "includes/directors.php";
require root . '/libs/db.php';
require root . '/libs/functions/user_functions.php';
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

$content = design_url . '/traders_register_tpl.php';


//include the tpl
require INC . '/index.php';