<?php
error_reporting(-1);

$test = 10;
$test2=10;
function getTotal($a,$b)
{
    echo $test;
    return $a+$b;
}

echo getTotal(10, 20); //30

$getTotal = function ($a,$b) use($test,$test2){
    echo $test;
    return $a+$b;
};

echo $getTotal(10,20);//30*/

?>