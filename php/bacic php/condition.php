<?php

$rahim = 100;
$karim = 1000;

if ($rahim == $karim) {
    echo "Rahim and karim same amount";
} elseif ($rahim < $karim) {
    echo "karim has less money than rahim";
} elseif ($rahim > $karim) {
    echo "rahim has more mony than rahim";
} elseif ($rahim >= $karim) {
    echo "alam has same or more money than rahim";
}
echo "\n";
$age = 10;

if ($age >= 12 && $age <= 20) {
    echo "This is person is a teenager";
} else {
    echo "This is person  not a teenager";
}
echo "\n";
$food = 'apple';
if ("tuna" == $food) {
    echo "It has vitamin D";
} else {
    echo 'don not vitamin';
}
echo "\n";
$food = 'apple';
if ("tuna" == $food || 'salmon' == $food) {
    echo "It has vitamin D";
} elseif ('apple' == $food) {
    echo 'apple doses not vitamin d';
} else {
    echo 'don not vitamin';
}
