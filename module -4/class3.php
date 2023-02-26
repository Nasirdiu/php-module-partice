<?php

$student = [
    '12' => 'Nasir',
    '13' => 'Pallob',
    '14' => 'Arif',
    '15' => 'Redu',
];
echo $student[15];

echo PHP_EOL;
$foods = [
    'vagetables' => 'brinjal,brocolli,carrot,vcapsicam',
    'fruits' => 'orange,banana,apple',
    'drinks' => 'water,milk',
];
// echo $foods['vagetables'];

foreach ($foods as $key => $value) {
    echo $key . "=" . $value . "\n";
}

echo PHP_EOL;

$keys=array_keys($foods);
for($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    echo $foods[$key]."\n";
}
echo PHP_EOL;

$values=array_values($foods);
for($i=0;$i<count($values);$i++){
    $value=$values[$i];
    echo $value."\n";
}
