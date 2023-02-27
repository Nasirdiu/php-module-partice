<?php

class OurClass
{
    final function doSomthing() //final use
    {
        echo "Doing somthing";
    }
}

class MyClass extends OurClass
{
    function doSomthing()
    {
        echo "Doing somthing";
    }
}
$mc = new MyClass();
$mc->doSomthing();
