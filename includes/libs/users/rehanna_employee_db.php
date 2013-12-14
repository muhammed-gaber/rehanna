<?php

class employee {

    static function insertNewEmployee($employee_info) {
        $rows = join(",", $employee_info);
        $sql = "INSERT INTO `rehanna_employee`(`emp_name`, `emp_job_id`, `emp_salary`, `emp_address`, `emp_married`, `emp_phone1`, `emp_phone2`, `emp_phone3`, `emp_certificate`) VALUES (" . $rows . ") ";
        db::getInstance()->query($sql);
    }

}
