<?php
    //barco de 4
    do {
    $i=rand(1,10);
    $j=rand(1,10);
     if ($i<8) {
        $barco4h =[ $i,$i+1,$i+2,$i+3,$i+4];
     }
     elseif ($j<8) {
        $barco4v =[ $j,$j+1,$j+2,$j+3];
     } 
    } while ($i>8&&$j>8);
    


?>