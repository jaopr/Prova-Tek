<?php
$string = "55,6";

$floatNumber = (float) $string;

echo $floatNumber; 
?>

<!-- Podemos adicionar: $string = str_replace(',', '.', $string); | Essa função impede que aconteça o arredondamento da casa decimal ao transformarmos string para float