<?php

//sort arsort asort rsort ksort krsort 

$fruits = array('a' => 'apple', 'b' => 'banna', 'orange', 'komla', 'cute', 'mango',);
$numbers = array(11, 2, 54, 1000, 63, 2, 1, 5, 4, 6, 4, 1);
// asort($fruits);
// print_r($fruits);


sort($numbers,SORT_STRING);
print_r($numbers);

// foreach($numbers as $num){
//     echo $num."\n";
// }


//SORT_STRING | SORT_FLAG_CASE
$random=array('apple','Apple','banna','Banna','other');

sort($random,SORT_STRING | SORT_FLAG_CASE);

print_r($random);