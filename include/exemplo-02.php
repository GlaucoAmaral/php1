<?php 


//include "exemplo-01.php"; //como se eu clonasse o arquivo para essa linha. Aqui pode ser um caminho (path).

require_once "exemplo-01.php";
require_once "exemplo-01.php";



$resultado = soma(10, 30);

echo $resultado;

//require obriga que o arquivo exista e esteja funcionando corretamente. REQUIRE SEMPRE MELHOR

//include tenta funcionar mesmo que o arquivo nao funcione e nao exista.

//require_onde ou include_once é ao inves de trazer duas vezes o mesmo arquivo, traz uma somente e já basta.


 ?>