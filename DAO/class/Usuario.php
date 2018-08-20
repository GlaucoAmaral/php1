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
			$this->setData($row);
			//echo "Dtcadastro: " . $row["dtcadastro"];//Dtcadastro: 2018-08-16 15:13:57
		}

	}


	public function update($login, $senha){

		$this->setDeslogin($login);
		$this->setDessenha($senha);

		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID", array(
			":LOGIN" => $this->getDeslogin(),
			":SENHA" => $this->getDessenha(),
			":ID" => $this->getIdusuario()
		 ));
		
	}



	public function __construct($login = "", $senha=""){
		$this->setDeslogin($login);
		$this->setDessenha($senha);

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
	//o fato dele ser static é melhor pois nao preciso instanciar objeto. Ele pertence a classe
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
			//var_dump($linha['dtcadastro']);
			//echo "Dtcadastro: " . $row["dtcadastro"];//string(22): 2018-08-16 15:13:57
			$this->setData($linha);
		} else {
			throw new Exception("Login e/ou senha inválidos");
			
		}
	}

	public function setData($data){
		$this->setIdusuario($data["idusuario"]);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data["dtcadastro"]));
	}


	public function insert(){
		$sql = new Sql();

		$resultado = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		));

		//var_dump($resultado);

		if(!empty($resultado)){
			$this->setData($resultado[0]);
		}
	}

	public function delete(){
		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID" => $this->getIdusuario()
		));
		//apago no banco e ja apago no objeto
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());


	}



}



 ?>