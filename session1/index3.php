<?php
  $num  = 100;
  $total = function ($a,$b) use(&$num){
    $num = 200;
    return $num+$a+$b;
  };

  echo $total(10, 20);//230
  echo $num;//200
?>