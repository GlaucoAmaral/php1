<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7"); //comeca com minusculo pois é uma classe nativa
/*ip, usuario, senha, banco */

if($conn->connect_error){
	echo "Error: " . $conn->conect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
//preparar um comando que vou enviar para o Banco de Dados e passso para a funcao o comando sql.
//
//$stmt->bind_param("ss", "user", "12345")//funcao esperada para os parametros passados com ponto de interrogacao. dois 's' -> duas strings
$login = "user";
$pass = "12345";


$stmt->bind_param("ss", $login, $pass);


//As duas funcoes acima preparam. Na bind_param é necessario a gente passar por referencia. logo vamos criar duas variaveis e passar.

//execute só ira rodar se o preparo estiver tudo ok Com o prepare e bind.
$stmt->execute();

$login = "root";
$pass = "top12345435";

$stmt->execute();





 ?>