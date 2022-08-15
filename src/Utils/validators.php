<?php

/**
 * Validate password complexity given
 * Password must be a minimum of 8 characters
 * Password must contain at least 1 number
 * Password must contain at least one uppercase character
 * Password must contain at least one lowercase character
 * Password must contain at least one special character
 * Return true if its validated or false if it is not
 */
function validatePassword(string $password){
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        return false;
    } 
    return true;
}
?>

 