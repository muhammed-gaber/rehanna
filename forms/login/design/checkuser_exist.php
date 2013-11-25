<?php

define("name", "../../../");
require name . 'includes/directors.php';
require root . '/libs/db.php';
require root . '/libs/users/users_operation.php';
require root . '/libs/validation/save_inputs.php';

$checker = TRUE;

$username = isset($_POST["username"]) ? save_inputs::secure($_POST["username"]) : null;
$password = isset($_POST["password"]) ? save_inputs::secure($_POST["password"]) : null;

if (count(users::select_by_username_password($username, $password)) == 0) {
    $checker = FALSE;
}
return json_encode($checker);
