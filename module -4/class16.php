<?php

$number = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function square($n)
{
    printf("Square of %d is %d \n", $n, $n * $n);

}

// array_walk($number, 'square');

function cube($n)
{
    return $n * $n * $n;
}

function even($n)
{
    return $n % 2 == 0;
}
function odd($n)
{
    return $n % 2 == 1;
}

// $newArray=array_map('cube',$number);
// print_r($newArray);
$even = array_filter($number, 'even');
print_r($even);
$odd = array_filter($number, 'odd');
print_r($odd);

print_r($number);


$person=array('Nasir','korim','jabbar','MN','Najmol','Nahid');

function filters($name){
    return $name[0]='n';
}
$newPerson=array_filter($person,'filters');

print_r($newPerson);