<?php

$name = "Running";
function dosamthing()
{
    // global $name;
    // echo $name;
    echo $GLOBALS['name'];
}
dosamthing();

echo PHP_EOL;

/*
function doSomting(){
    global $name;
    $name ="Nasir";//loacal variable
    echo $name;
}
doSomting();
// $name;

*/

function DOsOMTHING()
{
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}



DOsOMTHING();
