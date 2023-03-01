<?php

class Planet
{
    static function echoName()
    {
        echo static::getName(); //self or static
    }
    static function getName()
    {
        return "planet";
    }
}
class Eart extends Planet
{
    static function getName()
    {
        return "Eath";
    }
}

// Planet::echoName();

Eart::echoName();
