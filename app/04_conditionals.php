<?php 

$age = 17 ;

// if($age >= 18){
//   echo 'You are old enough to vote';
// } else {
//     echo 'Sorry,you are not old enough to vote';
// }

$t = date("H");

// if($t < 12){
//     echo 'Good Morning';   
// }else if($t < 17){
//     echo 'Good Afternoon';
// }else {
//     echo 'Good Evening';
// }


$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No Posts';
// }

// echo !empty($posts) ? $posts[0] : 'No Post';

// $firstPost = !empty($posts) ? $posts[0] : 'No Post';

$firstPost = !empty($posts) ? $posts[0] : null;

$firstPost = $posts[0] ?? null;

// echo $firstPost;

$favColor = 'yellow';

switch($favColor){
    case 'red':
        echo 'Your favorite color is red ';
        break;
    case 'blue':
        echo 'Your favorite color is blue ';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
       echo 'Your favorite color is not red, blue or green ';

}
