<?php 


/*
O PHP support libcurl, Uma biblioteca criada por Daniel Stenberg, que permite que você se conecte e se comunique com diferentes tipos de servidores utilizando diferentes tipos de protocolos. libcurl atualmente suporta os protocolos https, ftp, gopher, telnet, dict, arquivo e ldap. libcurl também suportatório HTTPS, HTTP POST, HTTP PUT, upload via FTP (ftp fazer PHP), upload HTTP por formulário, proxies, cookies, e autenticação com o usuário e senha.

https://translate.google.com.br/translate?hl=pt-BR&sl=en&u=http://php.net/manual/pt_BR/book.curl.php&prev=search
*/


$cep = "37133550";

$link = "https://viacep.com.br/ws/$cep/json/";


$ch = curl_init($link);/*Inicializa uma nova sessão e retorna um identificador cURL para uso com as funções curl_setopt () , curl_exec () e curl_close () .*/

var_dump($ch);/*resource(2) of type (curl) */


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


$response = curl_exec($ch);//retorna um json


curl_close($ch);


$data = json_decode($response, true);//true para virar um array, senao ficar stdClass Object

print_r($data);




 ?>