<?php

class users {

    private $user_id;
    
    function __construct() {
        
    }
    
   static function select_by_username_password($username,$password) {
        $sql="SELECT `sys_users_id`,`sys_users_name`,`sys_users_type` FROM `rehanna_sys_users`
              WHERE `sys_users_name`='". $username ."' and `sys_users_password`='". $password."'";
        db::getInstance()->fetch_row($sql);
    }
    
    

}