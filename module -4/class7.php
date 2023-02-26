<?php
//copy by value
//deep copy

//copy by refernce
//or shallow copy

$person = array('fname' => 'Nasir', 'lname' => 'Uddin');
$newPerson = $person;

print_r($person);
print_r($newPerson);

//................................

function printData(&$person){
    $person['fname'] .=" changed";
    print_r($person);
}

printData($person);
print_r($person);