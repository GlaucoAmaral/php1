<?php 

require_once("config.php");//requiro o config.php que tem o papel de encontrar as classes. Agora ja posso dar um new Sql.
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


//Carrega somente um usuario
//$root = new Usuario();
//$root->loadbyID(1);
//echo $root;


//Carrega uma Lista de Usuarios
//$lista = Usuario::getList();
//var_dump($lista);
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$busca = Usuario::search("jo");
//echo json_encode($busca);


//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("JOAO", "1233456789");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("GlaucoAmaral", "102030");
//$aluno->insert();
//echo $aluno;


//Atualizando uma pessoa
//$usuario = new Usuario();//crio usuario
//$usuario->loadbyID(6);//carrego ele
//$usuario->update("professor", "senhaProfessor");
//echo $usuario;

//deletando uma pessoa
$usuario = new Usuario();
$usuario->loadbyID(7);
$usuario->delete();
echo $usuario;
 ?>