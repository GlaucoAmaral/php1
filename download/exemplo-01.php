<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";


$content = file_get_contents($link);

//var_dump($content);//content é uma string que contem todo conteudo de caractere da imagem.


$parse = parse_url($link);
/*
array(3) {
  ["scheme"]=>
  string(5) "https"
  ["host"]=>
  string(17) "www.google.com.br"
  ["path"]=>
  string(60) "/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
}
*/

var_dump($parse);

$basename = (basename($parse["path"]));//aqui pego o nome do arquivo

var_dump($basename);
/*
googlelogo_color_272x92dp.png
*/

$file = fopen($basename, "w+");//crio o arquivo para escrita

fwrite($file, $content);//coloco todo conteudo da imagem no arquivo

fclose($file);//fecho o arquivo

 ?>

 <img src="<?=$basename?>">