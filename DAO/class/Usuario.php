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
		}

	}


	public function __toString(){
		return json_encode(array(
			"idusuario" => $this->getIdusuario(),
			"deslogin" => $this->getDeslogin(),
			"dessenha" => $this->getDessenha(),
			"dtcadastro" =>  $this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
}



 ?>