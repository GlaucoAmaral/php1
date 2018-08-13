<?php 


//$ts = strtotime("2001-09-11") . '<br>'; //converte string para timestamp

$ts =  strtotime("+10 day");




echo date('l, d/m/Y', $ts) . '<br>';



echo date('c');


 ?>