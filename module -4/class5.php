<?php
$foods = [
    'vagetables' => explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits' => explode(', ', 'orange,banana,apple'),
    'drinks' => explode(', ', 'water,milk'),
];

// print_r($foods);

array_push($foods['drinks'], 'orange juice');
// print_r($foods);

// echo $foods['vagetables'][3];

$simple =[
    [123],
    [23,45,56,567],
    [323,454,6,7,78,8],
    [43,56,6,7,7,8,898,9,9,[4,65,7]],
];

echo $simple[3][9][1];
