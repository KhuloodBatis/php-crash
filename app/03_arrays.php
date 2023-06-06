<?php

$name = [1, 2, 3];

$fruits = array('apple', 'orange', 'pear');

// print_r($name); 
// var_dump($name); 

// Associative Array

// $colors = [
//     1 => 'red',
//     4 => 'blue',
//     6 => 'green'
// ];

// echo $colors[1];


// $hex = [
//     'red'=> '#f00',
//     'blue'=>'#0f0',
//     'green' => '#00f'
// ];

// echo $hex['red'];

$users = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],

    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'maik',
        'email' => 'jane@gmail.com'
    ],
];

var_dump(json_encode($users));
