<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");


//stmt significa comando
//PDO::prepare-Prepara uma instrução para execução e retorna um OBJETO de instrução
//Prepara uma instrução SQL para ser executada pelo método PDOStatement :: execute (). 
//O PARAMETRO É O QUE VOCE VAI FAZER NO BANCO
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");//os valor em :identificador para o que passaremos os valores a ser inserido no banco

//var_dump($stmt);//object(PDOStatement)#2 (1) { ["queryString"]=> string(70) "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)" }

$login = "JOSE";
$password = "NovaSenhaUpdate";
$id = 1;



/*PDOStatement :: bindParam - Liga um parâmetro ao nome da variável especificada*/
$stmt->bindParam(":LOGIN", $login);//
$stmt->bindParam(":PASSWORD", $password);//
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados alterados com sucesso!!!";


 ?>