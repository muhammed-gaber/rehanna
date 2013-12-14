<?php

include_once 'validation_inputs.php';

class inputs_validation {

    static $errors = array();

    static function vaidateFullName($fullname, $minlength = 4, $maxlength = 75, $required = null) {
        if ($required) {
            if (empty($fullname)) {
                self::$errors["empty"] = 1;
                return self::$errors;
            }
        }
        if (!fields_validation::checkMinTextLength($fullname, $minlength)) {
            self::$errors["min"] = 1;
        } elseif (!fields_validation::checkMaxTextLength($fullname, $maxlength)) {
            self::$errors["max"] = 1;
        } elseif (!preg_match('/^[a-zA-Z_0-9 ]\x00-\x80+$/', $fullname)) {
            self::$errors["letter"] = 1;
        } elseif (!preg_match('/\s/', $fullname)) {
            self::$errors["space"] = 1;
        }
        return self::$errors;
    }

    static function validateAddress($address, $minlength = 4, $maxlength = 255, $required = null) {
        if ($required) {
            if (empty($address)) {
                self::$errors["empty"] = 1;
                return self::$errors;
            }
        }
        if (!fields_validation::checkMinTextLength($address, $minlength)) {
            self::$errors["min"] = 1;
        } elseif (!fields_validation::checkMaxTextLength($address, $maxlength)) {
            self::$errors["max"] = 1;
        } elseif (!preg_match('/\s/', $address)) {
            self::$errors["space"] = 1;
        }
        return self::$errors;
    }

    static function validateEmail($email, $required = null) {
        if ($required) {
            if (empty($email)) {
                self::$errors["empty"] = 1;
                return self::$errors;
            }
        }
        if (!fields_validation::validEmail($email)) {
            self::$errors["email"] = 1;
        }
        return self::$errors;
    }

    static function isChecked($value) {
        if (empty($value)) {
            self::$errors["checked"] = 1;
        }
        return self::$errors;
    }

    static function phoneNumber($phone, $minlength = 6, $maxlength = 13, $required = null) {
        if ($required) {
            if (empty($phone)) {
                self::$errors["empty"] = 1;
                return self::$errors;
            }
        }
        if (!fields_validation::checkMinTextLength($phone, $minlength)) {
            self::$errors["min"] = 1;
        } elseif (!fields_validation::checkMaxTextLength($phone, $maxlength)) {
            self::$errors["max"] = 1;
        } elseif (!fields_validation::checkPhoneNumber($phone)) {
            self::$errors["formate"] = 1;
        }
        return self::$errors;
    }

    static function validateCertification($certification, $required = null) {
        if ($required) {
            if (empty($certification)) {
                self::$errors["empty"] = 1;
                return self::$errors;
            }
        }
        if (!preg_match('/^[a-zA-Z_0-9 ]\x00-\x80+$/', $certification)) {
            self::$errors["letter"] = 1;
        }
        return self::$errors;
    }

    static function validateDate($date, $required = null) {
        if ($required) {
            if (empty($date)) {
                self::$errors["empty"] = 1;
                return self::$errors;
            }
        }
        if (!fields_validation::validateDate($date, 'd mmmm, yyyy')) {
            self::$errors["letter"] = 1;
        }
        return self::$errors;
    }

    static function validateSalary($salary, $required = null) {
        if ($required) {
            if (empty($salary)) {
                self::$errors["empty"] = 1;
            }
        }

        if (!fields_validation::checkIsNumber($salary)) {
            self::$errors["letter"] = 1;
        }
        return self::$errors;
    }

    static function validateUserName($username, $minlength = 4, $maxlength = 25, $required = null) {
        if ($required) {
            if (empty($username)) {
                self::$errors["empty"] = 1;
            }
        }

        if (!fields_validation::checkMinTextLength($username, $minlength)) {
            self::$errors["min"] = 1;
        } elseif (!fields_validation::checkMaxTextLength($username, $maxlength)) {
            self::$errors["max"] = 1;
        }
        return self::$errors;
    }
    
        static function validatePassword($password, $minlength = 4, $maxlength = 25, $required = null) {
        if ($required) {
            if (empty($password)) {
                self::$errors["empty"] = 1;
            }
        }

        if (!fields_validation::checkMinTextLength($password, $minlength)) {
            self::$errors["min"] = 1;
        } elseif (!fields_validation::checkMaxTextLength($password, $maxlength)) {
            self::$errors["max"] = 1;
        }
        return self::$errors;
    }

}
