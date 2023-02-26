<?php

$student = array(
    "Nasir",
    "Kalto",
    0171,
    "Rahim",
);

//ai vabe arry laka jai
$student = [
    "Nasir",
    "Kalto",
    0171,
    "Rahim",
];

var_dump($student);
echo PHP_EOL;
echo count($student);
echo PHP_EOL;

$n = count($student);

for ($i = 0; $i < $n; $i++) {
    echo $student[$i] ."\n";
}
