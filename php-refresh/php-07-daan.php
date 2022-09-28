<?php

function begroeting($tijd){

$tijd = date("H");

$naam = ("Daan");


if ($tijd > "1" && $tijd < "12") {
  echo "Goedemorgen $naam, het is $tijd uur";
} elseif ($tijd < "18" && $tijd >= "12") {
  echo "Goedemiddag $naam, het is $tijd uur";
} elseif($tijd >= "18") {
  echo "Fijne avond $naam, het is $tijd uur";
}

}

echo begroeting("");

?>