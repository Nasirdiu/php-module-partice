<?php
for ($i = 0; $i < 100; $i++) {
    // if ($i % 7 == 0) echo $i . "\n";
    // if ($i % 11 == 0) echo $i . "\n";

    // echo $i % 7==0 ?$i. "\n":'';
    // echo $i % 7==11 ?$i. "\n":'';
}

echo PHP_EOL;
for ($i = 0, $j = 0; $j < 100; $i += 7, $j += 11) {
    // echo $i."\n";
    // echo $j."\n";
    echo $j < 100 ? $j . "\n" : '';
}
