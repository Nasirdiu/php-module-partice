<?php

define('Ok',123);

class MyClass{
    const CITY="Dhaka \n";

    function sayHi(){
        echo "Hi From ".$this ::CITY;
    }
}

$m =new MyClass();

$m->sayHi();

echo MyClass::CITY;