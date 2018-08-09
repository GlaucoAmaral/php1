<?php 

$frase = "A repeticao e a mae da retencao.";

$q = strpos($frase, "mae"); //é a 17º(16 comecando por 0) posicao o comeco da palavra mae

$texto = substr($frase, 0, $q); //variavel contem o texto(frase), a partir de onde, até a posicao 17;

$final = substr($frase, $q, strlen($frase)); //variavel contem o texto(frase), a partir de onde, até a posicao 17;

var_dump($final);
echo "<br>";

var_dump($texto);
echo "<br>";

echo 'Valor $q: ' . "$q<br>";

$a = strpos($frase, "r");

echo 'O valor da variavel $a é: ' . "$a";


echo "a frase contem: " . strlen($frase) . "caracteres.";







 ?>