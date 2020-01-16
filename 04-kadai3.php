<?php
$arr = array(1,3,5,7,9);
function multi_array($arr){
  $result = $arr[0] * $arr[1] * $arr[2] * $arr[3] * $arr[4] ;
  return $result;
}
echo multi_array($arr);
echo "\n" ;
