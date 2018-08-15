<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function getLogrdouro(){
		return $this->logradouro;
	}

	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;

	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}


	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		//echo "DESTRUIR";
	}

	//sempre quando damos um echo no objeto
	/*O método __toString() permite que uma classe decida como se comportar quando convertida para uma string. Por exemplo, o que echo $obj; irá imprimir. Este método precisa retornar uma string, senão um erro nível E_RECOVERABLE_ERROR é gerado. */
	public function __toString(){
		return $this->logradouro . ", " . $this->numero . ", " . $this->cidade . ".";
	}



}


$endereco1 = new Endereco("Rua Treze de Maio", "32", "Amparo");

//var_dump($endereco1);


//unset($endereco1);


echo $endereco1;


 ?>