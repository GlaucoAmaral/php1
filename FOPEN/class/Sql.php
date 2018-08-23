<?php 


class Sql extends PDO{//a classe é um PDO(php data object)
//tudo o que o PDO faz, essa classe tambem faz.
	private $conexao;

	public function __construct(){
		$this->conexao = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($statement, $parameters = array()){
		
		foreach($parameters as $chave => $valor){
			$this->setParam($statement, $chave, $valor);
		}		
	
	}

	private function setParam($statment, $chave, $valor){
		$statment->bindParam($chave, $valor);
		/*PDOStatement :: bindParam - Liga um parâmetro ao nome da variável especificada*/
	}

	public function query($rawQuery, $params = array()){//esse metodo executa a query que voce quer fazer no banco de dados
		//stmt significa comando
		//PDO::prepare-Prepara uma instrução para execução e retorna um OBJETO de instrução
		//Prepara uma instrução SQL para ser executada pelo método PDOStatement :: execute (). 
		//O PARAMETRO É O QUE VOCE VAI FAZER NO BANCO
		$stmt = $this->conexao->prepare($rawQuery);
		$this->setParams($stmt, $params);
		//PDOStatement :: execute - Executa uma instrução preparada
		//Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
		$stmt->execute();
		return $stmt;
	}

	public function select($rawQuery, $params = array()) : array{
		/*PDOStatement :: fetchAll () retorna uma matriz contendo todas as linhas restantes no conjunto de resultados. A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades correspondentes a cada nome de coluna. Uma matriz vazia é retornada se houver zero resultados a serem obtidos ou FALSE na falha.*/
		$stmt = $this->query($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);//PDOStatement :: fetchAll - Retorna uma matriz contendo todas as linhas do conjunto de resultados. Cada linha do retorno de um select é um array com as informacaoes dentro de outro array
	}
}

 ?>