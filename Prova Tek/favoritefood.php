<?php
echo "Qual é sua comida favorita? ";
$handle = fopen("php://stdin", "r");
$favoriteFood = trim(fgets($handle));

switch ($favoriteFood) {
    case "Arroz Carreteiro":
        echo "Este prato é típico do Rio Grande do Sul!\n";
        break;
    case "Baiao de dois":
        echo "Este prato é típico do nordeste!\n";
        break;
    case "Feijao Tropeiro":
        echo "Este prato é típico de Minas Gerais!\n";
        break;
    default:
        echo "Prato de origem desconhecida!\n";
        break;
}

fclose($handle);
?>
