<?php

/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
*/
function check($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}


$result = check(11);
echo $result; 

