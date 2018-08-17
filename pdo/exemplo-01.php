<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//criei conexao PDO com o mysql


//PDO::prepare-Prepara uma instrução para execução e retorna um OBJETO de instrução
//Prepara uma instrução SQL para ser executada pelo método PDOStatement :: execute (). 
//O PARAMETRO É O QUE VOCE VAI FAZER NO BANCO
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
var_dump($stmt);//object(PDOStatement)#2 (1) { ["queryString"]=> string(43) "SELECT * FROM tb_usuarios ORDER BY deslogin" } 

echo '<br>';
$stmt->execute(); //manda para o banco de dados

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($resultado);

//cada linha é um array, pois retorna um array de array
foreach ($resultado as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ":</strong>" . $value . "<br>";
	}
	echo "-----------------------------------------<br>";
}


//var_dump($resultado);

 ?>