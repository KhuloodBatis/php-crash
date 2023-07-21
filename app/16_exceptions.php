<?php

function inverse($x){
  if(!$x){
    throw new Exception('division by Zero');
  }
    return 1/$x;
}


try{
    echo inverse(10);
    echo inverse(0);

} catch(Exception $e){
    echo 'Caught Exception ', $e->getMessage(),' ';
}

