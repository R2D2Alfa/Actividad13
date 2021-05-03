<?php
    //barco de 4
    do {
    $i=rand(1,10);
    $j=rand(1,10);
     if ($i<8) {
        $barco4h =[ $i,$i+1,$i+2,$i+3];
     }
     elseif ($j<8) {
        $barco4v =[ $j,$j+1,$j+2,$j+3];
     } 
    } while ($i>8&&$j>8);
    //barco de 3
    do {
        $i=rand(1,10);
        $j=rand(1,10);
         if ($i<9) {
            $barco4h =[ $i,$i+1,$i+2];
         }
         elseif ($j<9) {
            $barco4v =[ $j,$j+1,$j+2];
         } 
        } while ($i>9&&$j>9);
    


?>