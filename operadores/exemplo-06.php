<?php 

$a = NULL;

$b = NULL;

$c = 10;

echo $a ?? $b ?? $c; //mostra 'a' se 'a' nao for nulo, caso contrario vá para b até achar uma definifida.

 ?>