<?php 

$img = imagecreatefromjpeg("certificado.jpg");


$titleColor = imagecolorallocate($img, 0, 0, 0);

$grey = imagecolorallocate($img, 100, 100, 100);

imagestring($img, 5, 450, 150, "CERTIFICADO", $titleColor);

imagestring($img, 5, 440, 350, "Glauco Amaral", $titleColor);

imagestring($img, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");
imagejpeg($img, "certificado" . date("Y-m-d") . ".jpg", 10);
/*ultimo parametro é a qualidade. 0-100*/
imagedestroy($img);



 ?>