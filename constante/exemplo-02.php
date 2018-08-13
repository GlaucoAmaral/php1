<?php 

define("BANCO_DE_DADOS", [
	"127.0.0.1",
	"root",
	"teste"
], true);

//o terceiro parâmetro "true" é um parametro que informa que o nome da constate é canse insensitive, ou seja, chamando de maiuscula ou minuscula, refere-se a mesma constante.

print_r(BANCO_DE_DADOS);

 ?>