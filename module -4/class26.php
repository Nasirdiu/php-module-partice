<?php

$string = "Hello World, How are you, bangladesh";
$parts=explode(" ",$string);
print_r($parts);

echo PHP_EOL;
//join or imolode
$orginal=join(" ",$parts);
echo $orginal;

echo PHP_EOL;
//sigle word a vag 

// $parts2=str_split($string);
// print_r($parts2);

$parts3=strtok($string," ,");
while($parts3!==false){
    echo $parts3."\n";
    $parts3=strtok(" ,");
}

echo PHP_EOL;

$parts5=preg_split("/ |,/",$string);

print_r($parts5);