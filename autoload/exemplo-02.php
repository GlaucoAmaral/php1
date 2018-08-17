<?php 

function incluirClasse($nomeClasse){

	if(file_exists($nomeClasse . ".php") === true){ //se estiver no mesmo diretorio, faz o require_once
		require_once($nomeClasse . ".php");
	}
	
}

spl_autoload_register("incluirClasse");

spl_autoload_register(function($nomeClasse){

	if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
		require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}

});


$carro = new DelRey();
$carro->acelerar(80);
 
/*
http://php.net/manual/pt_BR/ref.spl.php
*/
 ?>

