<?php 

abstract class Animal{
	public function falar(){
		return "Som";
	}
	public function mover(){
		return "Anda";
	}

}


class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{
	//no falar aconteceu um polimorfismo
	public function falar(){
		return "Mia";
	}

}


class Passaro extends Animal{
	public function falar(){
		return "Canta";	
	}
	public function mover(){
		return "Voa e " . parent::mover();
	}
	/*
	quando eu for chamar um metodo da classe pai,utilizar 'parent::nomeMetodo();';
	O Operador de Resolução de Escopo (também chamado de Paamayim Nekudotayim), ou em termos mais simples, dois pontos duplo, é um símbolo que permite acesso a métodos ou propriedades estáticas, constantes, e sobrecarregadas de uma classe.
	*/


}



$pluto = new Cachorro();
echo $pluto->falar() . '<br>';
echo $pluto->mover() . '<br>';

echo '--------------------------<br>';

$garfield = new Gato();
echo $garfield->falar() . '<br>';
echo $garfield->mover() . '<br>';

echo '--------------------------<br>';


$ave = new Passaro();
echo $ave->falar() . '<br>';
echo $ave->mover() . '<br>';

 ?>