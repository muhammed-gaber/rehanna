<?php

class inputs_validation {

    static function vaidateFullText($fullname, $required = null, $minlength = 4, $maxlength = 75) {
        if (empty($fullname)) {
            if ($required) {
                return"empty";
            } else {
                return;
            }
        } if (!fields_validation::checkMinTextLength($fullname, $minlength)) {
            return "min";
        } elseif (!fields_validation::checkMaxTextLength($fullname, $maxlength)) {
            return "max";
        } elseif (!preg_match('/[^[\w ]+$/i', $fullname) || !preg_match('/\s/', $fullname)) {
            return "formate";
        }
    }

    static function validateText($address, $required = null, $minlength = 3, $maxlength = 255) {
        if (empty($address)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkMinTextLength($address, $minlength)) {
            return "min";
        } elseif (!fields_validation::checkMaxTextLength($address, $maxlength)) {
            return "max";
        } elseif (!preg_match('/\s/', $address)) {
            return "space";
        }
    }

    static function validateCompanyName($trader_name, $required = null, $minlength = 3, $maxlength = 255) {
        if (empty($trader_name)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkMinTextLength($trader_name, $minlength)) {
            return "min";
        } elseif (!fields_validation::checkMaxTextLength($trader_name, $maxlength)) {
            return "max";
        } elseif (trader::selectTraderByName($trader_name)) {
            return "max";
        }
    }

    static function validateEmail($email, $required = null) {
        if (empty($email)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "formate";
        }
    }

    static function validateChecked($value) {
        if (empty($value)) {
            return "checked";
        }
    }

    static function validatePhoneNumber($phone, $required = null, $minlength = 6, $maxlength = 13) {
        if (empty($phone)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkMinTextLength($phone, $minlength)) {
            return "min";
        } elseif (!fields_validation::checkMaxTextLength($phone, $maxlength)) {
            return "max";
        } elseif (!fields_validation::checkPhoneNumber($phone)) {
            return "formate";
        }
    }

    static function validatePhoneNumberCustomer($phone, $required = null, $minlength = 6, $maxlength = 13) {
        if (empty($phone)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkPhoneNumber($phone)) {
            return "formate";
        } if (cutomer::selectCustomerPhone($phone)) {
            return "exist";
        }
    }

    static function validateCertification($certification, $required = null) {
        if (empty($certification)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        }
    }

    static function validateDate($date, $required = null) {
        if (empty($date)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } elseif (!fields_validation::validateDate($date, 'd F- Y')) {
            return "formate";
        }
    }

    static function validateFloatNumber($salary, $required = null) {
        if (empty($salary)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkIsNumber($salary)) {
            return "letter";
        }
    }

    static function validateUserName($username, $required = null, $minlength = 4, $maxlength = 25) {
        if (empty($username)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkMinTextLength($username, $minlength)) {
            return "min";
        } elseif (!fields_validation::checkMaxTextLength($username, $maxlength)) {
            return "max";
        } elseif (preg_match('/\s/', $username)) {
            return "format";
        } elseif (users::select_username($username)) {
            return "exist";
        }
    }

    static function validatePassword($password, $required = null, $minlength = 4, $maxlength = 25) {
        if (empty($password)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkMinTextLength($password, $minlength)) {
            return "min";
        } elseif (!fields_validation::checkMaxTextLength($password, $maxlength)) {
            return "max";
        }
    }

    static function validateRePassword($password, $repassword, $required = null) {
        if (empty($repassword)) {
            if ($required) {
                return "empty";
            } else {
                return;
            }
        } if (!fields_validation::checkTxtEquivalence($password, $repassword)) {
            return "equivalance";
        }
    }

}
