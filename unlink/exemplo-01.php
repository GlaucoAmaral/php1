<?php 

$file = fopen("teste.txt", "w+");//nomeArquivo, modoAbertura

fclose($file);

unlink("teste.txt");

echo "ARquivo removido com sucessso!";


 ?>