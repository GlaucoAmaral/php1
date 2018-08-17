<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7"); //comeca com minusculo pois é uma classe nativa
/*ip, usuario, senha, banco */

if($conn->connect_error){
	echo "Error: " . $conn->conect_error;
}


$resultadoConsulta = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
var_dump($resultadoConsulta);

//enquanto existir dados, ele atribui para a variavel $row

$data = array();



//var_dump($resultadoConsulta);
echo "<br>";


while ($row = $resultadoConsulta->fetch_assoc()) {
	//array_push($data, $row);
	var_dump($row);
	foreach($row as $chave => $valor){
		echo "Chave: $chave - Valor: $valor" . '<br>';

	}
	//var_dump($row);
}

//echo json_encode($data);






 ?>