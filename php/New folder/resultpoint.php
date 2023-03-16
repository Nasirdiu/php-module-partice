<?php

$number = 32;

switch ($number) {
    case $number >= 101:
        echo "{$number} NUmber is over not allow";
        break;
    case $number >= 80:
        echo "{$number} Point is A+";
        break;
    case $number >= 70:
        echo "{$number} Point is A";
        break;
    case $number >= 60:
        echo "{$number} Point is A-";
        break;
    case $number >= 50:
        echo "{$number} Point is B";
        break;
    case $number >= 40:
        echo "{$number} Point is C";
        break;
    case $number >= 83:
        echo "{$number} Point is D";
        break;
    case 0:
        echo " {$number}Point is F";
        break;
    default:
        echo "{$number} This is a  Fall";
}
