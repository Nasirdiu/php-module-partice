<?php

class Human
{
    public $name;
    public $age;

    function __construct($personName, $personAge=0)
    {
        echo "Create a new Human \n";
        $this->name = $personName;
        $this->age = $personAge;
    }
    //......................

    function sayHi()
    {
        echo "salam \n";
        $this->sayName();
    }
    function sayName()
    {
        if($this->age){
            echo "My Name is {$this->name},I am {$this->age} years old\n";
        }
        else{
            echo "My Name is {$this->name},I don't no {$this->age} years old\n";
        }
       
    }
}
$h1 = new Human("Rubel", 22);
$h2 = new Human("Nasir", 27);
$h3=new Human("akhi");

$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
