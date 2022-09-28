<?php

$array = [11,11,5,2,12,6,7,8,1,10,9];

$sum = 0;
$sum = '';
print_r(telGroteGetallen($array));

function telGroteGetallen($array){
    for($i=0; $i<count($array); $i++){
        if( $array[$i] > 10) {
            $sum += $array[$i];

        }  
        
    }
}

?>