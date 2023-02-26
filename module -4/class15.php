<?php

$number1 = array(11, 2, '54', 1000, 63, 1000000, 2, 1, 5, 4, 6, 4, 1);
$number2 = array(11, 2, '54', 100, 200, 5000, 50, 63, 2, 1, 5, 4, 6, 4, 1);

$fruits1 = array('a' => 'apple', 'b' => 'banna', 'c' => 'orange');
$fruits2 = array('d' => 'gopal', 'e' => 'topal', 'b' => 'mango', 'f' => 'orange',);


$common = array_intersect($number1, $number2);
$commonf = array_intersect($fruits1, $fruits2);
print_r($common);

print_r($commonf);

$diff = array_diff($number2, $number1);
// $diffs=array_diff($fruits1,$fruits2);
//value diea cheek hoi
$diffs = array_diff_assoc($fruits1, $fruits2);
print_r($diff);
print_r($diffs);
