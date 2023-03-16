<?php
//break

for ($i = 20; $i < 50; $i++) {
    /*  echo $i;
    echo PHP_EOL;

    if ($i == 6) {
        break;
    }*/

    if ($i % 13 == 0) {
        echo $i;
        echo PHP_EOL;
        break;
    }
}

echo PHP_EOL;
echo PHP_EOL;

//contune 
for ($i = 20; $i < 30; $i++) {
    if ($i < 27) {
        continue;
    }
    echo $i;
    echo PHP_EOL;
}
