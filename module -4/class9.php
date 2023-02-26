<?php

$name= false;

if(isset($name)){
    echo "Name is set";
}else{
    echo "Not set";
}

echo "\n";

if(empty($name)){
    echo "Name is emtry";
}else{
    echo "Not emtry";
}
echo "\n";
if(isset($name)&& (is_numeric($name) || $name !='')){
    echo "Name is set and it's not emtry";
}else{
    echo "name is either not set or it\'s emtry";
}
