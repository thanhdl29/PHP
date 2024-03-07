<?php
//echo "we talk about Array<br>";
$some_numers = [1,2,3,4,5,8,7,9];
//$fruits = ['apple', 'melon', 'banana'];
$fruits = array('apple', 'melon', 'banana');
//print_r($fruits);
//echo $fruits[0];
//associative array
$colors=[
    3 => 'red', //key - value
    5 => 'green',
    6 => 'blue'
];
//echo $colors[5];

//key as a string

$hex_colors = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF'
];
//echo $hex_colors['green'];

$person = [
    'full_name' => 'Nguyễn văn a',
    'age' => '30',
    'email' => '1242@gmail.com'
];
//print_r($person);
//echo $person['age'];

$persons = [
    [
        'full_name' => 'Nguyễn văn a',
        'age' => '30',
        'email' => '1242@gmail.com'
    ],
    [
        'full_name' => 'Nguyễn văn b',
        'age' => '34',
        'email' => '1242@gmail.com'
    ],
    [
        'full_name' => 'Nguyễn văn c',
        'age' => '36',
        'email' => '1242@gmail.com'
    ]

];
//print_r($persons);
echo $persons[1]['full_name'];
//var_dump(json_encode($persons));
