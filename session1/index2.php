<?php
$a = 1;

//truyền theo tham trị
function changeA($num){
    $num = 20;
}

changeA($a);
echo $a; //1

//truyền theo tham chiếu
function changeA2(&$num){
    $num = 20;
}

changeA2($a);
echo $a;//20
?>