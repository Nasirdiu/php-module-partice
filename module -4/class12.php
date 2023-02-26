<?php
//array amrch_new arrary create

$fruits = array('apple', 'banna', 'orange', 'plum', 'badam', 'mango',);
$random = array('a' => 12, 'b' => 14, 'c' => 17, 'd' => 112, 'e' => 125, 12 => 32, 'ff' => 1244, 'ew' => 1325,);

/*

$newFruits1 = array_slice($fruits, 0, 3);
$newFruits2 = array_slice($fruits, 3,null,true);

$newFruits=array_merge($newFruits1,$newFruits2);

print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);


//all array pluse diea dakte hole 'null & true ' use korte hba.
$newFruitsPluse=$newFruits1+$newFruits2;

print_r($newFruitsPluse);
 */
$r1 = array_slice($random, 0, 2, true);
$r2 = array_slice($random, 4, null, true);
$r3 = array("j" => 101, "h" => 200);

$randomData = array_splice($random, 2, 2, array("j" => 101, "h" => 200));
$randomDataCorrect = $r1 + $r3 + $r2;
print_r($random);
print_r($randomDataCorrect);