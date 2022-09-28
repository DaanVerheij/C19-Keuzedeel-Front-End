<?php

$myArray=[4,5,4,5,6,6,5,8,7,6,4,8,10,2,1,7,3.5];

print_r(alleenOnvoldoendes($myArray));

function alleenOnvoldoendes($array) {
    $returnArray=[];
    for($i=0; $i<count($array); $i++){
        if( $array[$i] < 6) {
            $returnArray[]=$array[$i];
        }
    }
    return($returnArray);
}

?>