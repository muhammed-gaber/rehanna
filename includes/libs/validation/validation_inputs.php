<?php

class fields_validation {
    /*
     * check the text clear of any number
     * @return bool
     */

    public function __construct() {
        new fields_validation();
    }

    public static function isTextChars($text) {
        $checker = TRUE;
        if (ctype_alpha(!$text)) {
            $checker = FALSE;
        }
        return $checker;
    }

    /*
     * check the text required minimum length
     * @return bool
     */

    public static function checkMinTextLength($text, $length) {
        $checker = TRUE;
        if (strlen($text) < $length) {
            $checker = FALSE;
        }
        return $checker;
    }

    /*
     * check the text required maximum length
     * @return bool
     */

    public static function checkMaxTextLength($text, $length) {
        $checker = TRUE;
        if (mb_strlen($text, 'utf8') > $length) {
            $checker = FALSE;
        }
        return $checker;
    }

    /*
     * check the text isn't start with a number
     */

    public static function checkTextstart($text) {
        $checker = TRUE;
        if (preg_match('/^\d/', $text) === 1) {
            $checker = FALSE;
        }
        return $checker;
    }

    /**
      Validate an email address.
      Provide email address (raw input)
      Returns true if the email address has the email
      address format and the domain exists.
     */
    public static function validEmail($email) {
        $isValid = true;
        $atIndex = strrpos($email, "@");
        if (is_bool($atIndex) && !$atIndex) {
            $isValid = false;
        } else {
            $domain = substr($email, $atIndex + 1);
            $local = substr($email, 0, $atIndex);
            $localLen = strlen($local);
            $domainLen = strlen($domain);
            if ($localLen < 1 || $localLen > 64) {
                // local part length exceeded
                $isValid = false;
            } else if ($domainLen < 1 || $domainLen > 255) {
                // domain part length exceeded
                $isValid = false;
            } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
                // local part starts or ends with '.'
                $isValid = false;
            } else if (preg_match('/\\.\\./', $local)) {
                // local part has two consecutive dots
                $isValid = false;
            } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
                // character not valid in domain part
                $isValid = false;
            } else if (preg_match('/\\.\\./', $domain)) {
                // domain part has two consecutive dots
                $isValid = false;
            } else if
            (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
                // character not valid in local part unless 
                // local part is quoted
                if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                    $isValid = false;
                }
            }
            if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
                // domain not found in DNS
                $isValid = false;
            }
        }
        return $isValid;
    }

    /*
     * check two object equivalnce
     */

    public static function checkTxtEquivalence($obj1, $obj2) {
        $checker = TRUE;
        if (strcmp($obj1, $obj2) != 0) {
            $checker = FALSE;
        }
        return $checker;
    }

    public static function checkIsNumber($text) {
        $checker = TRUE;
        if (!is_numeric($text)) {
            $checker = FALSE;
        }
        return $checker;
    }

    /*
     * check the phone number
     */

    public static function checkPhoneNumber($phonetxt) {
        $checker = TRUE;
        if (!preg_match("/^([2]-)?[0-9]{4}-[0-9]{3}-[0-9]{4}$/i", $phonetxt)) {
            $checker = FALSE;
        }
        return $checker;
    }

    static function validateDate($date, $format = 'Y-m-d H:i:s') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

}

