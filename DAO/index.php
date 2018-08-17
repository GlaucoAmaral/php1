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
//o fato dele ser static é melhor pois nao preciso instanciar objeto. Ele pertence a classe
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

$sql = new Sql();
$sql->select("SELECT * FROM tb_usuarios");


 ?>