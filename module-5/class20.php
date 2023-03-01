<?php

// arry thake object a convert korer jono __toString 

class Color{
    public $color;
    function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function __toString(){
        return "The color is {$this->color}";
    }
}

$c=new Color('red');
echo $c;