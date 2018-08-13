<?php 



$dados = array();


$dados['nome'] = "Glauco Amaral";
$dados['idade'] = 20;
$dados['cidadeNatal'] = "Campinas" ;

echo "Tamanho do Array: " . count($dados) . "<br>"; //funcao count nos informa o tamanho do array

$ano = intval(date("Y"));
// var_dump($ano);

echo "idade: " + $dados['idade'] . "<br>";

$dados["dataNascimento"] = $ano - $dados['idade'];

var_dump($dados);


echo "<br> Primeiro ForEach: <br>";
foreach($dados as $key => $value){
	echo "Chave: $key | ";
	echo "Valor: $value; <br>";

}
echo "Segundo ForEach(Apenas valores): <br>";
 
foreach ($dados as $value){
	echo "Valor: $value <br>";
}

 ?>