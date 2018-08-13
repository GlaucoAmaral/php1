<?php 

//session_start();


require_once("config.php");

session_unset($_SESSION["nome"]); //LIMPA todas variaveis de sessao mas nao remove o usuario da sessao

echo $_SESSION["nome"];

session_destroy(); //limpa a variavel de sessao e remove a sessao



//session start para todas as paginas que irei utilizar
 ?>


