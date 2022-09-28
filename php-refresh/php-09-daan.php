<?php

$teller =  0;


$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
$array = explode(" ", $string, 2);
print_r($string);


foreach ($array as $string){
    if(strlen($teller) == 4){
        echo $teller;
    }

}



?>