<?php
    //barco de 4
    do {
    $i=rand(1,10);
    $j=rand(1,10);
     if ($i<8) {
    //El barco se hace horizontal
        $barco4h =[$i,$i+1,$i+2,$i+3];
        if ($j) {
         $barco4v = [$j];
         $barco4 = array_merge($barco4h, $barco4v);
     } 
     //El barco se hace vertical
     elseif ($j<8) {
        $barco4v =[$j,$j+1,$j+2,$j+3];
        $barco4h = [$i];
        $barco4 = array_merge($barco4h, $barco4v);
     } 
    }

     
    } while ($i>8&&$j>8);
    //barco de 3
    do {
        $i=rand(1,10);
        $j=rand(1,10);
        //El barco se hace horizontal
         if ($i<9) {
            $barco3h =[ $i,$i+1,$i+2];
            $barco3v = [$j]
            $barco3 = array_merge($barco3h, $barco3v);
        }
        //El barco se hace vertical
        elseif ($j<9) {
            $barco3v =[ $j,$j+1,$j+2];
            $barco3h =[$i];
            $barco3 = array_merge($barco3h, $barco3v);
        } 
        } while ($i>9&&$j>9);
        
        $EJEX = [
        "@" => "0",
        "A" => "1",
        "B" => "2",
        "C" => "3",
        "D" => "4",
        "E" => "5",
        "F" => "6",
        "G" => "7",
        "H" => "8",
        "I" => "9",
        "J" => "10",
        ];
        foreach ($EJEX as $key => $value) {
            $x[$value];
        }

?>