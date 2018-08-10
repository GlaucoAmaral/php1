<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="OK">
</form>

<?php
//como nao tem o action do form, todos os dados vão por get

if(isset($_GET)){
	foreach ($_GET as $campo => $valor) {
		if($campo == "OK") break;
		echo "Nome do campo: " . $campo . " Valor: " . $valor . "<br>"; 
	}
}
 ?>