<?php
$n = 11;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is an odd number\n";
}

echo "\n";

$color = 'red';
switch ($color) {
    case 'red':
    case 'green':
        echo ucwords($color) . " is our favorite color";
        break;
    case 'blue':
        echo 'Blue is not favorite';
        break;
    default:
        echo "This color is ok";
}
