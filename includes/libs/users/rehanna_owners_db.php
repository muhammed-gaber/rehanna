<?php

class owner {

    static function insertNewOwner($owner_info) {
        $rows = "'".join("','", $owner_info)."'";
        $sql = "INSERT INTO `rehanna_owners`(`owner_name`, `owner_proportion`) VALUES (" . $rows . ") ";
        db::getInstance()->query($sql);
    }

}
