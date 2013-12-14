<?php

class trader {

    static function insertNewTrader($trader_info) {
        $rows = join(",", $trader_info);
        $sql = "INSERT INTO `rehanna_traders`(`trader_id`, `trader_name`, `trader_company`, `trader_type`, `trader_category`, `Creditor`, `Debtor`) VALUES (" . $rows . ") ";
        db::getInstance()->query($sql);
    }

}
