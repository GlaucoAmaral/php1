<?php 



/*
niveis: public -> protect -> private
A visibilidade de uma propriedade ou método pode ser definida prefixando a declaração com as palavras-chave: public, protected or private. Itens declarados como públicos podem ser acessados de qualquer lugar. Membros declarados como protegidos só podem ser acessados na classe declarante e suas classes herdeiras. Membros declarados como privados só podem ser acessados na classe que define o membro privado.

publico: todo mundo vê;
protected: na mesma classe e classe extendida;
private: apenas a mesma classe;


3 coisas-> atributos e metodos da mesma classe, atributos e metodos das classes extendidas, proprio objeto.

*/


class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48; //propria classe e herdeiros
	private $senha = "123345"; //apenas na propria classe


	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}


class Programador extends Pessoa{
	/*programador irá extender tudo de Pessoa, exceto o que for private*/

	//como agora temos a funcao aqui na classe extendida, irá dar erro, pois o atributo senha é private, logo, somente a classe tem acesso

	
	public function verDados(){
		echo get_class($this) . '<br>';
		//get_class — Retorna o nome da classe de um objeto
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$objeto1 = new Programador();
$objeto1->verDados();

 ?>