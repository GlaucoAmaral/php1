<?php 


header("Content-type: image/jpeg");


$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;
/*
a linha do lista faz essas 3 linha seguintes
$data = getimagesize($file);
$width = $data[0];
$heigth = $data[1];
*/
list($old_width, $old_heigth) = getimagesize($file);


$new_image = imagecreatetruecolor($new_width, $new_height);//crio a imagem com tamanho novo que será a thumbnail
/*imagecreatetruecolor () retorna um identificador de imagem representando uma imagem preta de tamanho x_size por y_size .*/



$old_image = imagecreatefromjpeg($file);//crio a imagem antiga a partir de um arquivo

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_heigth);

imagejpeg($new_image);

imagedestroy($new_image);
imagedestroy($old_image);
/*
imagecopyresampled - Copia e redimensiona parte de uma imagem com reamostragem
*/


/*
dst_image = nova imagem
src_image = imagem de origem
dst_x = coordenada x do ponto de destino.
dst_y =  Coordenada y do ponto de destino.
src_x = coordenada x do ponto de origem.
src_y = coordenada y do ponto de origem.
dst_w = Largura do destino.
dst_h = Altura do destino.
src_w = Largura do origem.
src_h = Altura do destino.

*/


 ?>