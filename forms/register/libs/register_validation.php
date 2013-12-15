<?php

class inputs_validation {

    static $errors = null;

    static function vaidateFullName($fullname, $required = null, $minlength = 4, $maxlength = 75) {
        if (empty($fullname)) {
            if ($required) {
                self::$errors = "empty";
                return self::$errors;
            }
        } elseif (!fields_validation::checkMinTextLength($fullname, $minlength)) {
            self::$errors = "min";
        } elseif (!fields_validation::checkMaxTextLength($fullname, $maxlength)) {
            self::$errors = "max";
        } elseif (!preg_match('/[^[\w ]+$/i', $fullname)||!preg_match('/\s/', $fullname) ) {
            self::$errors = "formate";
        }
        return self::$errors;
    }

    static function validateAddress($address, $required = null, $minlength = 4, $maxlength = 255) {
        if ($required) {
            if (empty($address)) {
                self::$errors = "empty";
                return self::$errors;
            }
        } elseif (!fields_validation::checkMinTextLength($address, $minlength)) {
            self::$errors = "min";
        } elseif (!fields_validation::checkMaxTextLength($address, $maxlength)) {
            self::$errors = "max";
        } elseif (!preg_match('/\s/', $address)) {
            self::$errors = "space";
        }
        return self::$errors;
    }

    static function validateEmail($email, $required = null) {
        if ($required) {
            if (empty($email)) {
                self::$errors = "empty";
                return self::$errors;
            }
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            self::$errors = "formate";
        }
        return self::$errors;
    }

    static function validateChecked($value) {
        if (empty($value)) {
            self::$errors = "checked";
        }
        return self::$errors;
    }

    static function validatePhoneNumber($phone, $required = null, $minlength = 6, $maxlength = 13) {

        if (empty($phone)) {
            if ($required) {
                self::$errors = "empty";
            }
        } elseif (!fields_validation::checkMinTextLength($phone, $minlength)) {
            self::$errors = "min";
        } elseif (!fields_validation::checkMaxTextLength($phone, $maxlength)) {
            self::$errors = "max";
        } elseif (!fields_validation::checkPhoneNumber($phone)) {
            self::$errors = "formate";
        }
        return self::$errors;
    }

    static function validateCertification($certification, $required = null) {
        if ($required) {
            if (empty($certification)) {
                self::$errors = "empty";
                return self::$errors;
            }
        } elseif (!preg_match('/^[a-zA-Z_0-9 ]\x00-\x80+$/', $certification)) {
            self::$errors = "letter";
        }
        return self::$errors;
    }

    static function validateDate($date, $required = null) {
        if ($required) {
            if (empty($date)) {
                self::$errors = "empty";
                return self::$errors;
            }
        } elseif (!fields_validation::validateDate($date, 'd mmmm, yyyy')) {
            self::$errors = "formate";
        }
        return self::$errors;
    }

    static function validateSalary($salary, $required = null) {
        if ($required) {
            if (empty($salary)) {
                self::$errors = "empty";
            }
        } elseif (!fields_validation::checkIsNumber($salary)) {
            self::$errors = "letter";
        }
        return self::$errors;
    }

    static function validateUserName($username, $required = null, $minlength = 4, $maxlength = 25) {
        if ($required) {
            if (empty($username)) {
                self::$errors = "empty";
            }
        } elseif (!fields_validation::checkMinTextLength($username, $minlength)) {
            self::$errors = "min";
        } elseif (!fields_validation::checkMaxTextLength($username, $maxlength)) {
            self::$errors = "max";
        } elseif (!self::checkUserExist($username)) {
            self::$errors = "exist";
        }
        return self::$errors;
    }

    static function validatePassword($password, $required = null, $minlength = 4, $maxlength = 25) {
        if ($required) {
            if (empty($password)) {
                self::$errors = "empty";
            }
        } elseif (!fields_validation::checkMinTextLength($password, $minlength)) {
            self::$errors = "min";
        } elseif (!fields_validation::checkMaxTextLength($password, $maxlength)) {
            self::$errors = "max";
        }

        return self::$errors;
    }

    static function validateRePassword($password, $repassword, $required = null) {
        if ($required) {
            if (empty($password)) {
                self::$errors = "empty";
            }
        } elseif (!fields_validation::checkTxtEquivalence($password, $repassword)) {
            self::$errors = "equivalance";
        }

        return self::$errors;
    }

    static function checkUserExist($user_name) {
        if (!users::select_username($user_name)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
