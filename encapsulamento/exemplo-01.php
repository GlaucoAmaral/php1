<?php 



/*
niveis: public -> protect -> private
A visibilidade de uma propriedade ou método pode ser definida prefixando a declaração com as palavras-chave: public, protected or private. Itens declarados como públicos podem ser acessados de qualquer lugar. Membros declarados como protegidos só podem ser acessados na classe declarante e suas classes herdeiras. Membros declarados como privados só podem ser acessados na classe que define o membro privado.

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

$objeto1 = new Pessoa();
//echo $objeto1->nome . '<br>'; //okay pois ele é publico, todos nós teremos acesso.
//echo $objeto1->idade . '<br>'; //
$objeto1->verDados();


/* 3 coisas-> pessoas: atributos e metodos da mesma classe, atributos e metodos das classes extendidas, proprio objeto.

publico: todo mundo vê;
protected:na mesma classe e classe extendida;
private: ;

*/


 ?>