<?php 

require_once("config.php");//requiro o config.php que tem o papel de encontrar as classes. Agora ja posso dar um new Sql.
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$root = new Usuario();
$root->loadbyID(1);
echo $root;




 ?>