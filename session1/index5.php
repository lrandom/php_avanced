<?php
 trait Extra{
     function getTotal(){
         return 10+10;
     }

     function getSub(){
         return 20-10;
     }
 }

 trait Extra2{
     function getDivide(){
         return 10/2;
     }
 }

 class Calc{
     use Extra;
     use Extra2;
 }

 $calc = new Calc();
 $calc->getTotal();
 $calc->getSub();
$calc->getDivide();



?>