<?php 

$data = array(
	"empresa" => "Hcode Treinamentos"
);


setcookie("NOME_DO_COOKIE", json_encode($data),time() + 3600);
/*nomedocookie, o que voce ta salvando no cookei, e o time() de agora + quanto tempovc quer*/


echo "OK";





 ?>