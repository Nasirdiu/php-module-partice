<?php

//unset delete array name
$person = array('fname' => 'Nasir', 'lname' => 'Uddin');

print_r($person);

unset($person ['lname']);
print_r($person);