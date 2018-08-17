<?php 



spl_autoload_register(function($nameClass){
	echo "Preciso da classe: " . $nameClass;
	echo '<br>';
	$dirClass = "class";
	$fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
	echo 'Buscar em: ' . $fileName . '<br>';

	if(file_exists($fileName)=== true){
		require_once($fileName);
	}

});

echo "Primeiro ele vai até o nameSpace \Cliente\Cadastro e carrega class\Cliente\Cadastro.php. Apos isso, esta, extends da classe \Cadastro, e assim busca ela tb em class/Cadastro.php. <br>"





 ?>