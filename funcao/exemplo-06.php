<?php 


$pessoa = array("nome" => "joao", "idade" => 20);


foreach ($pessoa as &$valor) {//primeiro em qual array e dps os valores
	
	if(gettype($valor) === 'integer'){
		$valor+=10;
	}
	echo $valor . "<br>";
}


echo count($pessoa);

print_r($pessoa);

 ?>