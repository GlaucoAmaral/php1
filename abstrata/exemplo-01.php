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


abstract class Automovel implements Veiculo{
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

class DelRey extends Automovel{
	public function empurrar(){

	}



}

$carro = new DelRey();
$carro->acelerar(200);

//class -> classe normal
//extends-> heranca entre duas classes
//interface -> contrato, cada classe que implementar o contrato irá implementar os metodos, mas cada uma com seu jeito. implements
//abstract class-> classe com metodos abstratos ja prontos que serao utilizados igualmente nas classes que herdarem ela. extends

//extends somente de uma e implements de varias.



 ?>