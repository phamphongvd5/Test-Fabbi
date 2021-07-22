<?php 
$array = [1,5,4,7,9,0,-10,13,93,14,15];
$minspace = 0;
for($i =0; $i<count($array); $i++){
    for($j=$i+1; $j<count($array); $j++){
        $difference = $array[$j] - $array[$i];
        if($minspace > $difference){
            if($difference<0)
            $minspace = $difference*(-1);
        }
        
    } 
}
echo $minspace;
?>