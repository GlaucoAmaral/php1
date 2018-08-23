<?php 

$name = "images";


if(!is_dir($name)){//se o diretorio nao existe
	mkdir($name); //criar o diretorio com o nome passado no parametro
	echo "Diretorio $name criado com sucesso";
} else {
	rmdir($name);
	echo "Diretorio $name já existente, foi REMOVIDO";
}





 ?>