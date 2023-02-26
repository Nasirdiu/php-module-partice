<?php
//search 

$fruits = array('a' => 'apple', 'b' => 'banna', 'orange', 'komla', 'cute', 'mango',);
$numbers = array(11, 2, '54', 1000, 63, 2, 1, 5, 4, 6, 4, 1);

// string type cheek er jono true use korte hba
if (in_array(11, $numbers,true)) {
    echo "Search is done"."\n";
} else {
    echo "Not Done";
}

$offset=array_search(5,$numbers,true);

echo $offset;
echo "\n";

if(key_exists('aa',$fruits)){
    echo 'Key a is exisit';
}else{
    echo'not a key';
}

