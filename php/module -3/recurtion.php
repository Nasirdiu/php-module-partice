<?php

function printN($i)
{
    if ($i >= 10) {
        return;
    }
    echo $i . "\n";
    $i++;
    printN(($i));
}

// printN(0);

function printNum($counter ,$end,$steping){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter+=$steping;
   printNum($counter,$end,$steping);
}
printNum(1,100,20);

