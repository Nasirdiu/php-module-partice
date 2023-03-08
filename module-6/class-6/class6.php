<?php
$filename = "C:\\ostad php\\module\\module-6\\class-6\\data.txt";

$students = array(
    array(
        'fname' => 'Nasir',
        'lname' => 'Uddin',
        'age' => 27,
        'class' => 7,
        'roll' => 44,
    ),
    array(
        'fname' => 'redu',
        'lname' => 'ali',
        'age' => 20,
        'class' => 7,
        'roll' => 24,
    ),
    array(
        'fname' => 'Pallob',
        'lname' => 'bepari',
        'age' => 23,
        'class' => 7,
        'roll' => 36,
    ),
);

// $data=serialize($students);
// file_put_contents($filename,$data,LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename, $data, LOCK_EX);
