<?php

$number = range(40, 72);
$random = mt_rand(0, 32);

//  echo $number[$random]."\n";

$random = mt_rand(0, 32);

$luck = $number[$random];
if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}

shuffle($number);
print_r($number);
$randomNum=$number[0];
echo $randomNum;
