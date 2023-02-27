<?php

class shape{

}
class Shapes
{
    private $shapes;

    function __construct()
    {
        $this->shapes = array();
    }
    function addShape( shape $shape)
    {
        array_push($this->shapes, $shape);
    }
    function totalShape()
    {
        return count($this->shapes);
    }
}

class Recangle extends shape
{
}
class Triangle extends shape
{
}
class Student 
{
}

$shapesCollection=new Shapes();
$shapesCollection->addShape(new Recangle());
$shapesCollection->addShape(new Triangle());
// $shapesCollection->addShape(new Student());

echo $shapesCollection->totalShape();
