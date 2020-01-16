<?php
$arr= array(5,4,7,20,9);

function max_array($arr){
 $max_number = $arr[0];
   foreach($arr as $a){
     if ($max_number >= $a){
     $max_number = $max_number;
     }
     else{
     $max_number = $a;
     }
   }
 return $max_number;
}
echo max_array($arr);