<?php
class save_inputs {
    
    function __construct() {
        return new save_inputs();
    }

    public static function secure($str) {
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}


}
