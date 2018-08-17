<?php 

interface Veiculo{ //como se fosse um CONTRATO
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
	/*
	Mesma coisa que uma classe, mas possui somente as assinaturas dos metodos
	public function nomeFunction($atributos);
	*/
}


class Civic implements Veiculo{
	public function acelerar($v){
		echo "O veiculo acelerou até " . $v . "km/h.";
	}

	public function freiar($v1){
		echo "O veiculo frenou até" . $v1 . "km/h.";

	}

	public function trocarMarcha($m){
		echo "O veiculo engatou a marcha " . $m . "."; 

	}
}

$carro = new Civic();
$carro->trocarMarcha(2);
$carro->acelerar(400);



 ?>