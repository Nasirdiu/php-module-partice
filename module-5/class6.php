<?php

//call system ::

class ParentClass
{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }
    function sayHi()
    {
        echo "Hi From {$this->name} \n";
    }
    function sayHi2()
    {
        echo "HAZi From {$this->name} \n";
    }
}

class ChildClass extends ParentClass
{
    function sayHi()
    {
        parent::sayHi();
        parent::sayHi2();
        echo "Hello \n";
    }
}

$cc = new ChildClass("ABCD");
