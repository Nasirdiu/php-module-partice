<?php

$mark = 79;

if ($mark >= 101) {
    echo "{$mark} Mark Is over Is Not allow ?";
} elseif ($mark >= 80) {
    echo "{$mark}  Subject is A+";
} elseif ($mark >= 70) {
    echo "{$mark} Subject is A";
} elseif ($mark >= 60) {
    echo "{$mark} Subject is A-";
} elseif ($mark >= 50) {
    echo "{$mark} Subject is B";
} elseif ($mark >= 40) {
    echo "{$mark} Subject is C";
} elseif ($mark >= 33) {
    echo "{$mark} Subject is D";
} elseif ($mark >= 0) {
    echo "{$mark} Subject Is Fall";
} else {
    echo " Subject Fall";
}
