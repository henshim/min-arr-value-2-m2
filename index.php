<?php
function findMin($arr){
    $min=$arr[0];
    $count=count($arr);
    for ($i=0;$i<$count;$i++){
        if ($min>$arr[$i]){
            $min=$arr[$i];
        }
    }
    return $min;
}
$arr=[1,2,3,4,5,6,7,-1];
echo findMin($arr);