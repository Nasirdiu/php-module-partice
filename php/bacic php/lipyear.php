<?php

$year = 2020;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leper";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}
echo "\n";
//one line code

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}
