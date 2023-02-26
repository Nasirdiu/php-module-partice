<?php
// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
$fStr = 'Nasir Uddin ';
$lStr = 'Is coder coder';

function concatenateTwoStrings($a, $b) {
    $a = explode(' ',$a);
    $a = array_shift($a);
    
    $b = explode(' ',$b);
    $b = strrev(array_pop($b));

    return ($a.' '.$b);
}
echo concatenateTwoStrings($fStr, $lStr);