<?php

class users {

    function __construct() {
        new users();
    }

    static function select_by_username_password($username, $password) {
        $sql = "SELECT `sys_users_id`,`sys_users_name`,`sys_users_type`,`is_blocked` FROM `rehanna_sys_users` WHERE  `sys_users_name`='" . $username . "' and `sys_users_password`=md5('" . $password . "') limit 1";
        return db::getInstance()->fetch_row($sql);
    }

    static function login($user_id, $user_ip) {
        $sql = "INSERT INTO `login_logs`(`login_date`, `user_id`, `login_ip`, `is_logged`)
                VALUES ('" . time() . "','" . $user_id . "','" . $user_ip . ",'1')";
        db::getInstance()->query($sql);
    }

    static function check_login($user_id) {
        $sql = "SELECT `login_date`, `user_id`, `login_ip` FROM `login_logs` 
                WHERE `user_id`='" . $user_id . "' and `is_logged`='1'";
        return db::getInstance()->fetch_row($sql);
        
    }

    static function update_user_state($user_id) {
        $sql = "UPDATE `login_logs` SET ``is_logged`=0 WHERE `login_id` and `login_date`=";
        db::getInstance()->query($sql);
    }

}