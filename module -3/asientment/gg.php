<?php
function check($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}


$result = check(11);
echo $result; 

