<?php

class users {

    static function selectUSerByUsernameAndPassword($username, $password) {
        $sql = "SELECT  `sys_users_id` ,  `sys_users_name` ,  `sys_users_type` ,  `is_blocked` , (
SELECT  `login_ip` FROM  `rehanna_users`.`login_logs` WHERE  `user_id` =  `rehanna_sys_users`.`sys_users_id` 
AND  `is_logged` =1 ORDER BY  `login_date` DESC LIMIT 1) FROM  `rehanna_users`.`rehanna_sys_users` 
WHERE  `sys_users_name` =  '" . $username . "' AND  `sys_users_password` = MD5('" . $password . "') LIMIT 1";
        return db::getInstance()->fetch_row($sql);
    }

    static function update_block_user($user_id) {
        $sql = "UPDATE `rehanna_sys_users` SET `is_blocked`=1 WHERE`sys_users_id`='" . $user_id . "'";
        db::getInstance()->query($sql);
    }

    static function select_username($username) {
        $sql = "SELECT `sys_users_id` FROM `rehanna_sys_users` WHERE `sys_users_name`=" . $username . " LIMIT 1";
        $res = db::getInstance()->fetch_row($sql);
        return $res["sys_users_id"];
    }

}
