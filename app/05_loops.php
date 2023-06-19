<?php



//for loop 


// for($x = 0 ; $x <= 10 ; $x++){
//     echo 'Number' . $x . '<br>';
// }


//while loo 

// $x = 1 ;

// while($x <= 15 ){
//     echo 'Number' . $x . '<br>';
//     $x ++;
// }

/// do wile loo 

// $x = 1 ;
// do{
//     echo 'Number' . $x . '<br>';
//     $x ++;
// } while ($x <= 5 );


// forech loop 


$posts = ['First Post ', 'Second Post ','Third Post '];

foreach($posts as $index => $post){
    echo $index +1 . ' - '. $post . '<br>';
}