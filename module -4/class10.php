<?php

//arrary slice

$fruits = array('apple','banna','orange','plum','badam','mango',);

// $someFruits=array_slice($fruits,2);
// $someFruits=array_slice($fruits,2,1);
// $someFruits=array_slice($fruits,2,-1);
// $someFruits=array_slice($fruits,-2,-1);
// $someFruits=array_slice($fruits,3,3,true);



// print_r($someFruits);


$random=array('a'=>12,'b'=>14,'c'=>17,'d'=>112,'e'=>125,12=>32);

$randomData=array_slice($random,3,null,true);

print_r($randomData);