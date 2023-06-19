<?php

// function registerUser(){
//     echo 'User registered';
// }

// registerUser();

// function registerUserByEmail($email){
//     echo $email .' registered';
// }

// registerUserByEmail('kool');

// function sum($n1 = 4, $n2 = 5 ){
//     return $n1 + $n2 ;
// }

// $number = sum();

// echo $number ;

// $subtract = function($n1 , $n2 ){
//     return $n1 - $n2 ;
// };

// echo $subtract(10 ,5);


$multiply = fn($n1 , $n2) => $n1 * $n2;
 echo $multiply(2,2);