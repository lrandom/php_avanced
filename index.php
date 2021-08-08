<?php
$numberA = 6;
$numberB = 10;
$total = function () use (&$numberA, $numberB) {
    $numberA++;
    return $numberA + $numberB;
};


echo $total();
echo $numberA;
?>