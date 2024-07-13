<?php
$numbers = array(2, 5, 7, 8, 1, 3, 10);

$pares = array();
$impares = array();

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $pares[] = $number;
    } else {
        $impares[] = $number;
    }
}

echo "Números Pares: " . implode(', ', $pares) . "\n";
echo "Números Ímpares: " . implode(', ', $impares) . "\n";
?>
