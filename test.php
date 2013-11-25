<?php

require 'includes/directors.php';
require root . '/libs/db.php';
require root . '/libs/users/users_operation.php';
require root . '/libs/validation/save_inputs.php';
$username = isset($_GET["username"]) ? save_inputs::secure($_GET["username"]) : null;
$password = isset($_GET["password"]) ? save_inputs::secure($_GET["password"]) : null;
//echo count(users::select_by_username_password($username, $password));
if (count(users::select_by_username_password($username, $password)) === 0) {
    exit(json_encode(FALSE));
}else{
    exit(json_encode(TRUE));
}
