<?php 
$carros[0][0] = "GM";
$carros[0][1] = "COBALT";
$carros[0][2] = "ONIX";
$carros[0][3] = "CAMARO";

$carros[1][0] = "FORD";
$carros[1][1] = "KA";
$carros[1][2] = "ESCORT";
$carros[1][3] = "FIesta";


echo $carros[0][3];


echo "<br>" . end($carros[1]) . "<br>"; //nos informa o ultimo valor de tal array
//Faz o ponteiro interno de um array apontar para o seu último elemento

$frutas = array('laranja', 'abacaxi');

echo end($frutas);






 ?>