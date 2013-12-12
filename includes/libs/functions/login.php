<?php
$location=$_SERVER['HTTP_REFERER'];
if ($_POST) {
    $username = isset($_POST["username"]) ? filter_var($_POST["username"]) : null;
    $password = isset($_POST["password"]) ? filter_var($_POST["password"]) : null;
    if ($username == NULL || $password == NULL) {
        $error = FALSE;
        $content = $location;
    }
} elseif (isset($_COOKIE['id'])) {
    session_id($_COOKIE["id"]);
    $info = $_SESSION["id"];
} else {
    $content = design_url . '/login_tpl.php';
}

if (!empty($username) || !empty($password)) {
    $user_info = users::selectUSerByUsernameAndPassword($username, $password);
    $user_ip = user_function::getRealIpAddress();
    users::insertLogInLogs($user_info["sys_users_id"], $user_ip);
    $_SESSION["user_info"] = $user_info;
    setcookie('user_id', session_id(), time() + ((3600 * 24)), '/');
    $content = '../Home/index.php';
} else {
    $content = design_url . '/login_tpl.php';
}
