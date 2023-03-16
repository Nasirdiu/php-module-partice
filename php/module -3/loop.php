<?php

// for loop

for ($i = 1; $i < 10; $i++) {
    echo $i;
    echo PHP_EOL;
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
}
echo PHP_EOL;


//while loop
$i = 0;
while ($i < 10) {
    $i++;
    echo $i . PHP_EOL;
}

echo PHP_EOL;

//do while loop

$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 5);

echo PHP_EOL;
//goto loop

$i = 0;
a:
$i++;
echo $i . PHP_EOL;
if ($i < 10) goto a;
