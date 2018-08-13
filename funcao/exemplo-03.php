<?php 

function ola($texto = "mundo", $periodo="Bom dia"){ //com valor padrao
	return "Olá $texto! $periodo <br> ";
}



echo ola();
echo ola("Glauco", "Boa Noite.");
echo ola("Elis", "Boa Tarde");

//caso nao seja passado nada como no segundo parametro, temos o valor padrao que é inserido.



//IMPORTANTE: valores obrigatorios sempre a esquerda e nao obrigatorios sempre a direita
function teste($parametro1, $parametro2 = "Top"){

	return "Ola $parametro1! $parametro2.";
}

echo teste("Joao");


 ?>