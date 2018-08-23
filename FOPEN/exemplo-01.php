<?php 



$file = fopen("log.txt", "a+");// em C. Caminho, W ou R ou A. + é para criar se nao existir
//a+ o ponteiro do arquivo vai para o final e adiciona o conteudo
fwrite($file, date("m/d/Y H:i:s") . "\r\n");
/*
\r -> Retorno de carro (enter no mac)

\n -> Nova linha (unix)

\r\n -> CRLF (windows)
*/

fclose($file);

echo "Arquivo criado com sucesso.";


 ?>