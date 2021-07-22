<?php
$array = [0,100,-4,8,143,5,99,100];
$max = 0;
for($i =0; $i< count($array);$i++)
{
    for($j=$i+1; $j< count($array);$j++){
        
        $sum = $array[$i] + $array[$j];
        if($sum > $max){
            $max = $sum;
            
        }
        
    }
}
echo $max;
?>