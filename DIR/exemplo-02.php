<?php 


$images = scandir("images");//scaneia o diretorio e retorna array de arquivos que contem

//var_dump($images);

$data = array();//array vazio que guardará as informacoes do conteudo de tal pasta


foreach($images as $img){
	if(!in_array($img, array(".", ".."))){//faz uma busca dentro do array passado

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		//pathinfo() retorna um array associativo contendo inforamações sobre o caminho em path.
		$info = pathinfo($filename);//aqui pego as informacoes do arquivo. pathinfo retorna um array

		$info["size"] = filesize($filename);//aqui pego o tam do arquivo em bytes e adiciono mais um campo no array $info

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		//pega a ultima vez que ele foi modificado


		$info["url"] = "http://localhost/DIR/" . str_replace("\\", "/", $filename);
		

		//var_dump($info);

		array_push($data, $info);//coloco as informacoes de cada arquivo dentro de um array chamado $data

	}
}

echo json_encode($data);



 ?>