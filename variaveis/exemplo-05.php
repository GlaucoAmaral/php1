<?php 

$nome = "Glauco"; //aqui é o escopo global


function teste() {
	global $nome; //nome aqui e nome fora é a mesma variavel
	echo $nome;//nao temos a variavel nome nesse escopo.
}

function teste2(){
	$nome = "Joao";
	echo $nome . "Agora no teste 2";
}

teste();
echo "<br>";
teste2();



 ?>