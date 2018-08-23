<?php 

header("Content-type: image/png");

$img = imagecreate(256, 256);


/*A primeira cor criada vira automaticamente a cor de fundo*/


$black = imagecolorallocate($img, 0, 0, 0);/*padrao rgb*/
$red = imagecolorallocate($img, 255, 0, 0);


imagestring($img, 5, 60, 120, "Curso PHP7", $red);
/*
tamanho vai de um até cinco
60px da esquerda e 120 do topo
frase que quero
cor da frase
*/
 imagepng($img);/*gerar a imagem em png de acrodo com o parametro no header*/

imagedestroy($img);//destruir esse resource

 ?>