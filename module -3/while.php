<?php

$i = 0;
while ($i < 5) {
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo PHP_EOL;

$j = 0;
while ($j++ < 5) {
    echo $j;
    echo PHP_EOL;
}

echo PHP_EOL;

$j = 0;
while (++$j < 5) {
    echo $j;
    echo PHP_EOL;
}
$x = $y = 5;
$x = $y++;
echo $x . ":" . $y;
