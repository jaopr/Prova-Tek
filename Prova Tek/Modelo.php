<?php
$cellPhone = array('MARCA' => 'Xiaomi', 'MODELO' => 'Redmi Note 8', 'COR' => 'Preto');

if (array_key_exists('MODELO', $cellPhone)) {
    echo "A chave MODELO foi encontrada no array\n";
} else {
    echo "A chave MODELO não foi encontrada no array\n";
}
?>
