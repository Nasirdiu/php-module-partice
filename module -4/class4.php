<?php

$vegetables = explode(',', 'brinjal,brocolli,carrot,vcapsicam,');
//delimeter
var_dump($vegetables);
echo $vegetables[0];

$vegetabless=preg_split('/(, |,)/', 'brinjal,brocolli,carrot,vcapsicam,apple-golap');

print_r($vegetabless);

$vegetablesString=join(', ',$vegetables);

echo $vegetablesString;