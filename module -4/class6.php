<?php
$student = array(
    'fname' => 'Nasir',
    'lname' => 'Uddin',
    'age' => '27',
    'class' => 12,
    'section' => 'A',
);

print_r($student);

echo $student['fname'] . " " . $student['lname'] . "\n";

printf("%s %s \n", $student['fname'], $student['lname']);

$serilize = serialize($student);
echo $serilize;

echo "\n";

$newSerilize = unserialize($serilize);
print_r($newSerilize);
echo "\n";
$jsondata = json_encode($student);
echo $jsondata;
echo "\n";
echo "\n";
$student2 = json_decode($jsondata);
print_r($student2);
