<?php 

$fruits = ['apple', 'orange', 'pear'];

//Get length 

//echo count($fruits);


// Search array 

// var_dump(in_array('apples',$fruits));

//Add to array 

$fruits[] = 'grape';

array_push($fruits, 'Blueberry');
array_unshift($fruits,'mango');

//remove 

array_pop($fruits);
array_shift($fruits);

unset($fruits[2]);
// print_r($fruits);

//split into 2 chunks

$chunked_array = array_chunk($fruits,2);

// print_r($chunked_array);

// array 

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1,$arr2);
$arr4 = [...$arr1,...$arr2];

//print_r($arr4);

$a = ['green','red','yellow']; //key
$b = ['avacado','apple','banana'];//value

$c = array_combine($a,$b);

// print_r($c);

// $cKeys = array_keys($c); //green red yellow

//flipped value => key 

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1,20);

// print_r($numbers);
$newNumbers = array_map(function($number){
    return "number is " . $number;
}, $numbers);
// print_r($newNumbers);
$lessTen = array_filter($numbers,function ($number){
    return $number <=10;
});
// print_r($lessTen);

$sum = array_reduce($numbers,function($carr,$number){
    return $carr + $number ;
});
var_dump($sum);