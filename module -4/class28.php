<?php

$string = "Quick Brown brown Fox fox jumps over the lazy dog";

//dubol name change korte ireplace diea korte hba 
// $replaceString = str_ireplace('brown', 'red', $string, $count);
$replaceString = str_ireplace(array('brown', 'fox'), array('red', 'cat'), $string, $count);


echo $replaceString;
echo "\n";
echo $string;
echo "\n";

echo "Total relace :{$count}";
