<?php 

function soma(int... $valores) : float{ //nos indica qual o tipo do retorno que a funcao retorna
	return array_sum($valores);
}
//como coloquei apenas int, se eu colocar um float, ele ignora o valor depois da virgula

echo soma(2, 2) . "<br>";
echo soma(5, 5, 6 ,7) . "<br>";

var_dump(soma(2,2));

echo '<br>';


function retornaArray(int ...$valores) : array{
	return $valores;
}

$arrayDeVetores = retornaArray(1,2,3,4,5,6);

var_dump($arrayDeVetores);

echo '<br>';


foreach($arrayDeVetores as $valores){
	echo $valores . '<br>';
}


for($i = 0; $i<count($arrayDeVetores); $i++){
	echo "Posição $i: " . $arrayDeVetores[$i] . '<br>';
}


 ?>