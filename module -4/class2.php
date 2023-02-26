<?php

/*
array_shift();
array_unshift();
array_push();
array_pop();

*/

$student = [
    "Nasir",
    "Kalto",
    0171,
    "Rahim",
];

$student[2] = "Pallob";


$stuPop = array_pop($student);
$stuPop = array_shift($student);

// echo $stuPop."\n";

$student[] = "jabbar";
array_push($student, "salam");
array_unshift($student, "rafiq");

$n = count($student);
for ($i = 0; $i < $n; $i++) {
    echo $student[$i] . "\n";
}
