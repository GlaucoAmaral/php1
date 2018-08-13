<?php 



session_id('jf3tvbmtjet4p94f197c1mkeo5'); //coloco para minha sessao utiizar esse id, logo consigo acessar as mesma informaçoes em outro navegador.

require_once("config.php"); //session_start


//session_regenerate_id(); //essa funcao gera um novo id de sessao


echo session_id() . "<br>";


var_dump($_SESSION);



 ?>