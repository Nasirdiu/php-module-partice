<?php

//clone object 

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
}

class FavColor
{
    public $data;
    public $color;
    function __construct($data,$color)
    {
        $this->data = $data;
        $this->color=new Color($color);
    }

    function uoDateColor($color)
    {
        $this->color->setColor($color);
    }
    function __clone(){
        $this->color=clone $this->color;
    }
}

$fc1 = new FavColor('Somae data','Red');
$fc2 = clone $fc1;

print_r($fc1);

// print_r($fc2);

// $fc2->setData('More data');
// print_r($fc1);
// print_r($fc2);

$fc2=clone $fc1;
print_r($fc2);

$fc2->uoDateColor('green');
print_r($fc1);
print_r($fc2);