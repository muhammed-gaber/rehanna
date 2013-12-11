<?php

if (!empty($username) || !empty($password)) {
    $user_info = users::selectUSerByUsernameAndPassword($username, $password);
    $user_ip = user_function::getRealIpAddress();
    users::login($users_info["sys_users_id"], $user_ip);
    $_SESSION["user_info"] = $users_info;
    setcookie('user_id', sq(session_id()), time() + ((3600 * 24)), '/');
    $content = '../Home/index.php';
} else {
    $content = design_url . '/login_tpl.php';
}
