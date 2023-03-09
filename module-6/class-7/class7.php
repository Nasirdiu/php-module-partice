<?php
$filename = "D:\Nasir php\module-6\class-7\data.txt";

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

// $encodedData= json_encode($students);
// file_put_contents($filename,$encodedData,LOCK_EX);

$data=file_get_contents($filename);
// $allStudent=json_decode($data,true);
$allStudent=json_decode($data);
print_r($allStudent);

echo $allStudent[0]->fname;