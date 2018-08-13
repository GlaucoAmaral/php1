<?php 

$pessoas = array();


//A sintaxe "index => values", separados por vírgulas, definem índice e valores respectivamente. O índice por de ser do tipo string ou numérico. Quando o índice é omitido, um índice numérico inteiro é automaticamente gerado, começando do 0

array_push($pessoas, array(
	'nome' => "Joao",
	'idade' => 20));


array_push($pessoas, array(
	'nome' => "Glauco",
	'idade' => 23));

echo json_encode($pessoas);


 ?>