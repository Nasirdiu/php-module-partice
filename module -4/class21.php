<?php

$fruit = array('a' => 'Array', 'b' => 'bannana','c'=>'cat','d'=>'dog');

$_fruit=$fruit;

shuffle($_fruit);
$key=array_rand($fruit);

echo $fruit[$key];

print_r($_fruit);
