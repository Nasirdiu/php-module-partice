<?php

$person=[
    'name'=>'XYZ',
    'id'=>'some_id',
    'age'=>'22',
    'sex'=>'M'
];

function processMaternityLeave($person){
    if('F'==$person['sex']){
        echo "Processed";
    }else{
        throw new Exception("Gender Mismatch");
    }
}



try{
    processMaternityLeave($person);
}catch(Exception $e){
    echo $e->getMessage();
}