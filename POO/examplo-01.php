<?php 

class Pessoa {

	public $nome;//crio o atributo. Lembrar sempre que em php nao temos a descricao do tipo da variavel

	//jeitor em desuso o normal é com __construct
	public function Pessoa($nome){
		$this->nome = $nome;
	}

	/*ATRIBUTOS DENTRO DOS METODOS SEMPRE COM 'THIS'*/

	public function falar(){
		return "Ola, meu nome é " . $this->nome; 
	}

}

$glaucio = new Pessoa("Glauco Amaral Geraldino");
//$glaucio->nome = "Glauco Amaral";
echo $glaucio->falar();



 ?>