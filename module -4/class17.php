<?php
//reduce
$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function sum($oldValue, $newValue)
{
    if ($newValue % 2 == 0) {
        return $oldValue + $newValue;
    }
    return $oldValue;

}
$sum = array_reduce($number, 'sum');

echo $sum;
