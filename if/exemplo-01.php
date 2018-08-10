<?php 


$qualASuaIdade = 66;

$idadeCrianca = 12;

$idadeMaior = 18;

$idadeMelhor = 65;


if($qualASuaIdade < $idadeCrianca){
	echo "Crianca";
} else if ($qualASuaIdade < $idadeMaior){
	echo "Maior idade.";
} elseif ($qualASuaIdade < $idadeMelhor) {
	echo "Adulto";
} else {
	echo "Idoso";
}


echo "<br>";


//toda vez que tivermos uma condicao bem simples
echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade":"Maior idade";




















 ?>