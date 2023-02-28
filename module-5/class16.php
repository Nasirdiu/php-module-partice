<?php

// __get r __set
class Student
{
    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    //magik method 

    public function __get($prop)
    {
        return strtoupper($this->$prop);
    }
    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    // function getName()
    // {
    //     return $this->name;
    // }
    // function setName($name)
    // {
    //     $this->name = $name;
    // }
    // function getAge()
    // {
    //     return $this->name;
    // }
    // function setAge($age)
    // {
    //     $this->name = $age;
    // }
    // function getClass()
    // {
    //     return $this->name;
    // }
    // function setClass($class)
    // {
    //     $this->name = $class;
    // }
}

$R = new Student('Rahim', '16', '10');

// $R = new Student();
// $R->setName('Karim');

// echo $R->getName();
// echo $R->name;

$R->name="Kamal";

echo $R->name;

