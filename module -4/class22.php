<?php

$name = "Nasir";

// $string='my name is $name \n \t';
$string = "my name is $name \n \t";

echo $string;

$herdoc = <<<'EOD'
data 1

new line {$name} \n

EOD;

echo $herdoc;
