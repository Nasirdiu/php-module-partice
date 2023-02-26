<?php

$n = -101;
$r = $n % 2; //abs diea kora jai
switch ($r) {
    case 0:
        switch ($n) {
            case $n > 0:
                echo "$n is a posstive even number";
                break;
            case $n < 0:
                echo "$n is a negtive even number";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "$n is a posstive odd number";
                break;
            case $n < 0:
                echo "$n is a negtive odd number";
                break;
        }

}

echo "\n";

switch (true) {
    case (0 == $r && $n > 0):
        echo "$n is a posstive even number";
        break;
    case (1 == $r && $n > 0): {
            echo "$n is a posstive odd number";
        }
        break;
    case (0 == $r && $n < 0):
        echo "$n is a negtive even number";
        break;
    case (-1 == $r && $n < 0): {
            echo "$n is a negtive odd number";
        }
        break;

}