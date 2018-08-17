 <?php 


function __autoload($nomeClasse){
	require_once("$nomeClasse.php");
	//var_dump($nomeClasse);
	/*É uma funcao que fica puxando cada vez mais que falta os require_once, ele puxa as extensoes.POr exempl: nesse caso primeiro faltou a classe DelRey e ele ja fez o require, e faltou dps a interface Automovel que assim ja realizou o require_once
	Quanto estivermos no mesmo diretorio
	Estará dando erro pois está em outro diretorio a classe Automovel.php
	*/

}


/*
require_once("Automovel.php");

*/

$carro = new DelRey();
$carro->acelerar(80);


  ?>