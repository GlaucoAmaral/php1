<?php 


class Carro{

	private $modelo;
	private $motor;
	private $ano;



	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}


	public function getMotor() : float{
		return $this->motor;
	}
	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno() : int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function exibe() : array{
		return array(
			'modelo' => $this->getModelo(),
			'motor' => $this->getMotor(),
			'ano' => $this->getAno()
		);
	}

}

$carro1 = new Carro();
$carro1->setModelo("Fusca");
$carro1->setMotor("1.6");
$carro1->setAno("1960");


print_r($carro1->exibe());

echo '<br>';

var_dump($carro1->getAno());

echo '<br>';

var_dump($carro1->exibe());
 
 ?>