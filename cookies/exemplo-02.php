<?php 
/*PEGANDO OS COOKIES*/



if(isset($_COOKIE["NOME_DO_COOKIE"])){

	//var_dump($_COOKIE["NOME_DO_COOKIE"]);
	/*string(32) "{"empresa":"Hcode Treinamentos"}" 

	*/

	$data = json_decode($_COOKIE["NOME_DO_COOKIE"], true);

	var_dump($data);

}

 ?>
