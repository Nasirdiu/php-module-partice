<?php

abstract class OurClass
{
    function sayHi()
    {
        echo "Hi";
    }
    abstract function eat();
}

class MyClass extends OurClass
{
    function eat()
    {
        echo "i am eating";
    }
}

$mc = new MyClass();
$mc->eat();
