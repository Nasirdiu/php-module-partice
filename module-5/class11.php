<?php

//polimorfigom

interface BaseAnimal
{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}
class Animal implements BaseAnimal
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    public function canTalk();
}

class Human implements BaseHuman
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
    public function canTalk()
    {
    }
}

$h=new Human();
echo $h instanceof BaseAnimal;