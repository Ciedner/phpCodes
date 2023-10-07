<?php

function squareRoot ($number){
   $result = array();
   for ($i = 1; $i <= $number; $i++){
    $result[$i] = round(sqrt($i),2);
   }
   return $result;
}

$answer = squareRoot(16);

foreach ($answer as $i => $value){
    echo "The squre of number " . $i .  " is " . " = " . $value;
    echo "<br>";
}
?>