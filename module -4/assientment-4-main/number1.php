<?php 

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
$arr = array("Nasir", "korim", "refuji", "Yousof Vai");

function arrayByLenth($arr) {
    usort($arr, function($a, $b) {
        return (strlen($a) - strlen($b));
    });

    return $arr;
}

print_r(arrayByLenth($arr));

