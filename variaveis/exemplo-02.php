<?php 

$anoNascimento = "1990";

//nao pode comecar com numero e unico caracter permitido para variavel é o underline
///**/ pode ser utilizado para comentario de blocos de codigo
$nome1 = "Joao";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome; //o ponto é utilizado para concatenacao

echo $nomeCompleto;

exit;//pára a execucao aqui

echo $nome1;

echo "<br/>"; //quebra de linha. HTML

unset($nome1); //excluir a variavel ou variveis.----

if(isset($nome1)){ //se a variavel existe, ou estiver definida
	echo $nome1;
}



?>