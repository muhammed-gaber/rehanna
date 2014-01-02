<?php

class trader {

    static function insertNewTrader($trader_info) {
        $sql = "INSERT INTO `rehanna_traders`(`trader_company`, `trader_company_address`, `trader_company_phone1`, `trader_company_phone2`, `trader_company_phone3`, `trader_type`, `trader_category`) VALUES "
                . " ('".$trader_info["fullname"]."','".$trader_info["address"]."','" .$trader_info["Phone_Num_1"]."','".$trader_info["Phone_Num_2"]."','".$trader_info["Phone_Num_3"]."','".$trader_info["trader_type"]."','".$trader_info["trader_category"]."') ";
        db::getInstance()->query($sql);
    }

    static function selectTraderByPhone($phone) {
        $sql = "SELECT * FROM `rehanna_traders` WHERE `trader_company_phone`=" . $phone . " limit 1";
        return db::getInstance()->fetch_row($sql);
    }

    static function selectTraderByName($trader_name) {
        $sql = "SELECT * FROM `rehanna_traders` WHERE `trader_name`=" . $trader_name . " limit 1";
        return db::getInstance()->fetch_row($sql);
    }

    static function selectTraderByCompanyName($company_name) {
        $sql = "SELECT * FROM `rehanna_traders` WHERE `trader_company`=" . $company_name . " limit 1";
        return db::getInstance()->fetch_row($sql);
    }

}
