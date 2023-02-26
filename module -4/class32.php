<?php

$name="Nasir Uddin 01714771225";
$parts=sscanf($name,"%s %s %11d");
print_r($parts);

sscanf($name,"%s %s %11s",$fname,$lname,$mobile);
echo $fname;

$hexColor="#FF2F44";

sscanf($hexColor,'#%2x%2x%2x',$red,$green,$blue);

echo $blue;