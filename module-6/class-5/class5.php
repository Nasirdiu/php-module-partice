<?php
$filename = "C:\\ostad php\\module\\module-6\\class-5\\data.txt";

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


$fp = fopen($filename, "w");
foreach ($students as $student) {
$data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
fwrite($fp,$data);
}
fclose($fp);

 

/*
//essay style
$fp = fopen($filename, "w");
foreach ($students as $student) {
// $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
// fwrite($fp,$data);
fputcsv($fp, $student);
}
fclose($fp);
 */

/*
$fp = fopen($filename, "r");
while ($data = fgets($fp)) {
$student = explode(",", $data);
printf("Name =%s %s\nAge=%s\nClass=%s\nRoll=%s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}

fclose($fp);
 */

/*
//essay style fgetcsv
$fp = fopen($filename, "r");
while ($student = fgetcsv($fp)) {

printf("Name =%s %s\nAge=%s\nClass=%s\nRoll=%s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
}

fclose($fp);
 */
/*
//data added
$student = array(
'fname' => 'Kamal',
'lname' => 'Hossain',
'age' => 27,
'class' => 7,
'roll' => 44,
);

$fp = fopen($filename, "a");
fputcsv($fp, $student);
fclose($fp);
 */

//data delete

$data = file($filename);
print_r($data);
unset($data[1]);
$fp = fopen($filename, "w");
foreach ($data as $line) {

    fwrite($fp, $line);
}
fclose($fp);
