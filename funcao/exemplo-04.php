<?php 

function ola(){

	$argumentos = func_get_args(); //essa funcao recupera tdos argumentos passados como parametro para a funcao
	return $argumentos;
}


var_dump(ola("Bom dia", 10));

 ?>