<?php
    $year = 2001;
    $bday = 25;
    $month = 07;

   echo "You are born in ". $month. "/". $year . "/" . $bday . " and it is ";
    if ($bday % 2 == 0){
        echo "Even";
    }
    else{
        echo "Odd";
    }
?>
