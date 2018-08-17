<?php 
require_once("config.php");

use \Cliente\Cadastro; //para usar um namespace. E o que eu quero é esse.
//contra barra e o caminho do arquivo que voce quer.

$cad = new Cadastro();
$cad->setNome("Glauco Amaral Geraldino");
$cad->setEmail("glauco_chimba@hotmail.com");
$cad->setSenha("glauco123");

$cad->registrarVenda();

 ?>