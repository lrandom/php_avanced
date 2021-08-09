<?php
function map($mang,$fnc)
{
   for ($i=0;$i<count($mang);$i++){
       $fnc($mang[$i],$i);
   }
}

map([1, 2, 3, 4], function ($item, $index) {
    echo $item;
});

class Collection{
    private $mang = [];
     function __construct($mangInput){
              $this->mang = $mangInput;
    }

    function map($fnc){
        for ($i=0;$i<count($this->mang);$i++){
            $fnc($this->mang[$i],$i);
        }
    }
}

$collection = new Collection([1,2,3,4,5]);
$collection->map(function ($item,$index){
    echo $item;
});
?>