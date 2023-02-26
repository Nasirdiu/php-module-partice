<?php
// 5.Write a PHP function to find the second largest number in an array of numbers.
$numbers = array(5, 3, 32, 1, 10);
function findSecondLargestNum(array $arr):int {
    if(count($arr) <= 2) {
        return "Please send minimum 3 values";
    }

    usort($arr, function($a, $b) {
        return ($a < $b);
    });

    return $arr[1];
}

echo findSecondLargestNum($numbers);