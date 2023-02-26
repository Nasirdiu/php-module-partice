<?php

//arrary_splice
//array  slice kore and add kore new array 

$fruits = array('apple','banna','orange','plum','badam','mango',);
$random=array('a'=>12,'b'=>14,'c'=>17,'d'=>112,'e'=>125,12=>32);

$newFouritsAdded=array("komla",'vuta','piyara');

$someForuits=array_splice($fruits,2,2,$newFouritsAdded);

print_r($someForuits);

print_r($fruits);
