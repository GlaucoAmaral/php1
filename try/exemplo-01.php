<?php 

try{

	throw new Exception("Houve um erro.", 400);
	

} catch(Exception $e){//erro ta tudo na variavel $e
	echo json_encode(array(
		"menssagem"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));


}






 ?>