<?php
 $Disparo = [$x, $y];

 print_r($Disparo);

 //Contador de vidas x8
 for ($i=0; $i < 9; $i++) { 
    echo"<img src= alt=corazon height=40 widgth=40>";
 }

$choque1 = array_intersect ($Disparo, $barco4);
var_dump($choque1);
$choque2 = array_intersect ($Disparo, $barco3);


 if ($choque1=true||$choque2=true) {
     
 }
?>