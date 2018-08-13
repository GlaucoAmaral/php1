<?php 

$pessoas = array();


//A sintaxe "index => values", separados por vírgulas, definem índice e valores respectivamente. O índice por de ser do tipo string ou numérico. Quando o índice é omitido, um índice numérico inteiro é automaticamente gerado, começando do 0

array_push($pessoas, array(
	'nome' => "Joao",
	'idade' => 20));


array_push($pessoas, array(
	'nome' => "Glauco",
	'idade' => 23));


//print_r($pessoas); //printa o array inteiro com suas estrturas

//print_r($pessoas[0]); //printa apenas a posicao zero do array

//print_r($pessoas[0]['nome']); //print o nome localizado no index 0 do array


$frutas = array('m' => 'maca', 'p' => 'pera', 'u' => 'uva', 5 => 'Cinco');

print_r($frutas);

/*Demonstracao do print_r + crtl u no navegador
Array
(
    [m] => maca
    [p] => pera
    [u] => uva
)
*/







 ?>