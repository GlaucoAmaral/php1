<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($valor){
		$this->deslogin = $valor;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($senha){
		$this->dessenha = $senha;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($valor){
		$this->dtcadastro = $valor;
	}

	public function loadbyID($id){
		$sql = new Sql();
		//PDO retorna um array de array mesmo retornando uma linha na consulta mesmo
		$resultado = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));
		if(count($resultado) > 0){
			$row = $resultado[0];
			$this->setIdusuario($row["idusuario"]);
			$this->setDeslogin( $row["deslogin"]);
			$this->setDessenha($row["dessenha"]);
			$this->setDtcadastro(new DateTime($row["dtcadastro"]));
			//echo "Dtcadastro: " . $row["dtcadastro"];//Dtcadastro: 2018-08-16 15:13:57
		}

	}


	public function __toString(){
		return json_encode(array(
			"idusuario" => $this->getIdusuario(),
			"deslogin" => $this->getDeslogin(),
			"dessenha" => $this->getDessenha(),
			"dtcadastro" =>  $this->getDtcadastro()->format("d/m/Y H:i:s")
			//só é permitido ->format se for um objeto DateTime
		));
	}

	//lista com todos usuarios

	public static function getList(){
		//retorna um array de array. Cada linha é um array
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ");

	}

	public static function search($login){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			":SEARCH" => "%" . $login . "%"
		));
	}

	public function login($login, $senha){
		$sql = new Sql();
		$resultado = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
			":LOGIN" => $login,
			":SENHA" => $senha
		));

		if(!empty($resultado)){
			//resultado é um array de array. Se o banco retornar 1 linha, entao virá um array com 1 array dentro. Se retornar 3 linhas, irá retornar um array com 3 array dentro.
			$linha = $resultado[0];
			var_dump($linha['dtcadastro']);
			$this->setIdusuario($linha["idusuario"]);
			$this->setDeslogin($linha['deslogin']);
			$this->setDessenha($linha['dessenha']);
			$this->setDtcadastro(new DateTime($linha["dtcadastro"]));
		} else {
			throw new Exception("Login e/ou senha inválidos");
			
		}
	}





}



 ?>