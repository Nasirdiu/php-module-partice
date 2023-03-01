<?php

class Planet
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

$e = new Planet("Eart");
$e2 = $e;

$e1 = new Planet("Eart");
$m = new Planet("Marts");

if ($e1 == $e2) {
    echo "semilar palants";
} else {
    echo "Not semilar";
}
