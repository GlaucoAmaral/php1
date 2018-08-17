<?php 

namespace Cliente; //NOME DO NAMESPACE DESSE ARQUIVO. NOME DA PASTA PRA ORGANIZACAO

class Cadastro extends \Cadastro { // BARRA VOLTA NA RAIZ E PEGA O CADASTRO DE LÁ!!!
	public function registrarVenda(){
		echo "Venda Registrada para o cliente " . $this->getNome();
	}





}
 ?>