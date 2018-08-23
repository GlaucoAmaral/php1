<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//$_POST apenas String
	$file = $_FILES["fileUpload"];

	/*var_dump($file);
	array(5) {
	  ["name"]=>
	  string(42) "SQL- Conceitos Avançados II - Visões.ppt"
	  ["type"]=>
	  string(29) "application/vnd.ms-powerpoint"
	  ["tmp_name"]=>
	  string(24) "C:\xampp\tmp\phpAB91.tmp"
	  ["error"]=>
	  int(0)
	  ["size"]=>
	  int(251392)
	}

	*/
	
	if($file["error"])
		throw new Exception("Error: " . $file["error"]);

	$dirUploads = "uploads";

	if(!is_dir($dirUploads))
		mkdir($dirUploads);

	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
		//Ele pega o arquivo que esta em uma pasta temporária do servidor e move para esta pasta.C:\xampp\tmp\phpAB91.tmp
		//$file é um array com as informacoes do arquivo
		echo "Upload realizado com sucesso.";

	}else{
		throw new Exception("Error: Nao foi possivel realizar o upload");
		
	}
		
}


 ?>