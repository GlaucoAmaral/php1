<?php
////////////////////////////////////tipos primitivos
$nome =  "Hcode";
$site =  'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////////tipos compostos: array e object

$frutas = array("abacaxi", "laranja", "manga");

echo "Printando tudo: " . " " . $frutas[0] . " " . $frutas[1] . " " . $frutas[2] . "<br>";


$nascimento = new DateTime(); //pega a data de agora. tipo objeto
//var_dump($nascimento);

//////////////////////////////////// tipos especiais:  resource e null
$arquivo = fopen("exemplo-03.php", "r"); //tipo resource
//var_dump($arquivo);

$vazio = NULL;

var_dump($vazio);






 ?>