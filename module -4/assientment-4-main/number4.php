<?php
// 4.Write a PHP function to check if a string contains only letters and whitespace.
function containsOnlyLettersAndWhitespace($str) {
    if ( preg_match ("/^[a-zA-Z\s]+$/",$str)) {
        $result = "string contains only letters and whitespace";
    } else {
        $result = "not string contains only letters and whitespace";
    }
    return $result;
}
$str1 = "Hellow word";
$str2 = "Hellow word, hi";

echo containsOnlyLettersAndWhitespace($str1).PHP_EOL;
echo containsOnlyLettersAndWhitespace($str2);
