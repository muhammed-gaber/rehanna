<?php

class user_function {

    function __construct() {
        new user_function();
    }

    static function getRealIpAddress() {
        return !empty($_SERVER['HTTP_CLIENT_IP']) ?
                $_SERVER['HTTP_CLIENT_IP'] : (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ?
                        $_SERVER['HTTP_X_FORWARDED_FOR'] : (!empty($_SERVER['REMOTE_ADDR']) ?
                                $_SERVER['REMOTE_ADDR'] : null));
    }

}