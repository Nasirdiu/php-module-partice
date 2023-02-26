<?php
// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$oldArray = array("Nasir", "korim", "refuji", "Yousof Vai");

function removeLastFirstAndReturnArray($oldArray){
    array_pop($oldArray);
    array_shift($oldArray);

    return $oldArray;
}
$newArroy = removeLastFirstAndReturnArray($oldArray);
print_r($newArroy);

