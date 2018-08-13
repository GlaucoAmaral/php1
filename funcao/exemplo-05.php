<?php 

$a = 20;

function trocaValorPorValor($a){
	$a += 20;
	return $a;
}

function trocaValorPorReferencia(&$a){
	$a += 20;
	return $a;
}

//e-commercial é por referencia

echo trocaValorPorValor($a) . "<br>";
trocaValorPorReferencia($a);
trocaValorPorReferencia($a);

echo $a;

 ?>