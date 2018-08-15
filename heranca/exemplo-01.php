<?php 


class Documento{

	private $numero;

	 public function getNumero(){
	 	return $this->numero;
	 }

	 public function setNumero($numero){
	 	$this->numero = $numero;
	 }
}


class Cpf extends Documento{

	public function validar() : bool{

		$numeroCPF = $this->getNumero();
				
		//Aqui vai a validacao do CPF
		return true;
		
	}
}



$doc = new Cpf();

$doc->setNumero("12345678911");

echo $doc->getNumero() . '<br>';

var_dump($doc->validar());

 ?>