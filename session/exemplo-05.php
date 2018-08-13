<?php 
require_once("config.php");



echo session_save_path();


echo "<br>" . session_status() . "<br>";


switch (session_status()) {
	case 0:
	echo "As sessoes estao desabilidatas.";
	break;
	case 1:
	echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
	break;
	case 2:
	echo "se as sessões estiverem habilitadas, e uma existir.";
	break;
	
	default:
	# code...
	break;
}


 ?>