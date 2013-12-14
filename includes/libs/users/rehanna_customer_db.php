<?php

class cutomer {

    static function insertNewCustomer($customer_info) {
        $rows=  join(",", $customer_info);
        $sql="INSERT INTO `rehanna_customer`(`customer_name`, `customer_phone`, `customer_job`, `customer_age`, `customer_job_period`, `customer_favorites_category`, `customer_favorites_type`, `customer_favorites_concentration`, `customer_last_sale`, `customer_penultimate_sale`, `customer_pre_penultimate_sale`) VALUES (".$rows.") ";
        db::getInstance()->query($sql);
    }
}

