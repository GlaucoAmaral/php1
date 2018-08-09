<?php 



$nome = "Glauco Amaral";

$nome =  strtoupper($nome); //upper case
echo ($nome);
echo "<br>";

$nome = strtolower($nome); //lower case
echo ($nome);

echo "<br>";

$nome = ucfirst($nome); //primeira letra da primeira palavra em maiuscula.
echo ($nome);
echo "<br>";

$nome = ucwords($nome); //primeira letra de cada palavra maiuscula.
echo ($nome);

 ?>