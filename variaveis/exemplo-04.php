<?php 

$nome = (int) $_GET["a"]; //array super global pois nao precisa colocar global nele quando for usar em um outro escopo que nao seja o escopo global, fazendo um cast pois todos os dados vindos de POST ou GET são string. ?a=123


//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //captura informacoes do ambiente e pega o ip
//$ip = $_SERVER["SCRIPT_NAME"]; //captura informacoes do ambiente e pega o caminho de acesso


 echo "ip" . " " . $ip;




 ?>