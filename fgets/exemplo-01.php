<?php 


$filename = "usuarios.csv";

if(file_exists($filename)){
	
	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file)); //espera o arquivo. //O fgets pega primeira linha do arquivo.
	//print_r($headers);
	/*
	O implode coloca as virgulas.
	O explode retira as virgulas.
	*/
	//var_dump($headers);

	$data = array();

	while ($row = fgets($file)) {//enquanto houver linha
		$i = 0;//inicia o contador
		
		$rowData = explode(",", $row);//row data sera um array com todas informacoes em cada posicao
		
		$linha = array(); //crio o array linha que TERÁ $chave => valor. Ex: idusuario => JOSE

		foreach($rowData as $valor){ //para cada valor em rowData que é um array com as informacoes
			$linha[$headers[$i++]] = $valor;//adiciono no array linha a informacao de acordo com os dados do headers
		}
		
		array_push($data, $linha);//adiciono o array dentro de outro array com todos os dados
	}

	fclose($file);

	echo json_encode($data);

}





 ?>