<?php 

if(!is_dir("imagens"))//se o diretorio nao existir
	mkdir("imagens");//cria o diretorio

//$arquivos = scandir("imagens");


foreach (scandir("imagens") as $nomeArquivos) {
	if(!in_array($nomeArquivos, array(".", "..")))
		unlink("imagens/" . $nomeArquivos);
}

echo "Arquivos apagados com sucesso";



 ?>