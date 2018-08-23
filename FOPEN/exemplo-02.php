<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst(($key)));
}

//print_r($headers);

$file =  fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach($usuarios as $rowDoBd){
	$data =  array();

	foreach ($rowDoBd as $valor) {
		array_push($data, $valor);
	}//foreachcoluna

	fwrite($file, implode(",", $data) . "\r\n");

}//foreach linha

fclose($file);

echo("Csvgerado com sucesso.")

//echo implode(",", $headers);//primeiro parametro é o separador e o segundo o array que ele vai separar de acordo com o caractere passado primeiro.
 ?>