<?php

session_start();
$no_footer = 1;

function redirect($location) {
    header('location:' . $location . '');
    exit();
}

if (isset($_POST['user_type']) || isset($_GET['user_type'])) {
    if (isset($_POST['user_type'])) {
        $user_type = $_POST['user_type'];
    } else {
        $user_type = $_GET['user_type'];
    }
} else if (isset($_COOKIE['ad_id']) || isset($_COOKIE['user_id'])) {
    if (isset($_COOKIE['ad_id'])) {
        session_id($_COOKIE["ad_id"]);
    } else {
        session_id($_COOKIE["user_id"]);
    }
    $info = $_SESSION["id"];
    $user_type = $info["user_type"];
} else {
    $user_type = null;
}


define('INC', './includes');

if ($user_type == 'pub') {
    define('pub', 1);
    define('background', "/int/images/11.jpg");
    $prefix_cookie = 'user';
} else if ($user_type == 'ad') {
    define('ad', 1);
    define('background', "/int/images/22.jpg");
    $prefix_cookie = 'ad';
}

$dir = '.';

include_once($dir . '/newglobal.php');


$page_title = $setting['sitename'];

$do = isset($_GET['do']) ? $_GET['do'] : null;

switch ($do) {


    default:
        if (isset($userinfo['id']) == true) {
            if (isset($_POST)) {
                if ($_POST["remember_me"] == "1") {
                    $_SESSION["id"] = array('email' => sq($_POST['email']), 'pass' => md5($_POST['password']), 'user_type' => $user_type);
                    setcookie($prefix_cookie . '_id', sq(session_id()), time() + ((3600 * 50) * 100), '/');
                } else {
                    $_SESSION["id"] = array('email' => sq($_POST['email']), 'pass' => md5($_POST['password']), 'user_type' => $user_type);
                    setcookie($prefix_cookie . '_id', sq(session_id()), time() + ((3600 * 2)), '/');
                }
                $page_title = "جاري الانتقال  .... إنتظر ..";
            }

            if ($user_type == 'ad') {
                $_SESSION['current_user_type'] = 'ad';
                redirect('advertiser/index.php');
            } else {
                $_SESSION['current_user_type'] = 'pub';
                redirect('publisher/index.php');
            }
        } else {
            $page_title = $phrase["login_page"]["login_title"];

            $content = 'login.php';
        }

        break;

    case "logout":
        if (isset($userinfo['id']) == true) {

            setcookie($prefix_cookie . 'id', 1, time() - ((3600 * 50) * 400), '/');
            unset($_SESSION["id"]);
            $page_title = $phrase["login_page"]["login_title"];

            redirect('index.php');
        } else {

            redirect('login.php');
        }


        break;
}


include 'tpl/index.php';
?>