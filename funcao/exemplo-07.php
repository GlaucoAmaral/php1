<?php 

function soma(int... $valores){
	return array_sum($valores);
}
//como coloquei apenas int, se eu colocar um float, ele ignora o valor depois da virgula

echo soma(2, 2) . "<br>";
echo soma(5, 5, 6 ,7);







 ?>