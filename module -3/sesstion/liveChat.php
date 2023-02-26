<?php

function has_pair_with_sum($arr, $sum)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] + $arr[$j] == $sum) {
                return true;
            }
        }
    }
    return false;
}

$arr = [5, 7, 1, 2, 8, 4, 3];
$sum = 8;

if (has_pair_with_sum($arr, $sum)) {
    echo "True";
} else {
    echo "False";
}
