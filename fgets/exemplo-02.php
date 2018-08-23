<?php 


$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));//lê o conteudo inteiro de um arquivo. Abre e fecha automaticamente.

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);//retorna o tipo do arquivo


//echo "data:image/png;base64, " . $base64;


$base64encode = "data:" . $mimetype . ";base64," . $base64;

 ?>

 <a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>
 <img src="<?=$base64encode?>">