<?php 



$json = '[{"nome":"Joao","idade":20},{"nome":"Glauco","idade":23}]';


$data = json_decode($json, true); //o true é para transformar em array, caso nao tenha, vira objeto

//Retorna um object ou um array associativo se o parâmetro opcional assoc é TRUE.


var_dump($data);
echo "<br>";
print_r($data);

echo "<br>";


$frutas = array('m' => 'maca', 'p' => 'pera', 'u' => 'uva', 5 => 'Cinco');


var_dump($frutas);


 ?>