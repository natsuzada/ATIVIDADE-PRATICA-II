<?php
                                
                              // QUESTÃO 6 //
                              
function areaQuadrado($lado) {
    return $lado * $lado;
}

function areaRetangulo($base, $altura) {
    return $base * $altura;
}

function areaCirculo($raio) {
    return pi() * $raio * $raio;
}

echo "Escolha uma das figuras geométrica (quadrado, retângulo, círculo): ";
$figura = strtolower(trim(fgets(STDIN)));

if ($figura == "quadrado") {
    echo "Digite o lado do quadrado: ";
    $lado = floatval(trim(fgets(STDIN)));
    echo "A área do quadrado é: " . areaQuadrado($lado) . "\n";
} elseif ($figura == "retangulo") {
    echo "Digite a base do retângulo: ";
    $base = floatval(trim(fgets(STDIN)));
    echo "Digite a altura do retângulo: ";
    $altura = floatval(trim(fgets(STDIN)));
    echo "A área do retângulo é: " . areaRetangulo($base, $altura) . "\n";
} elseif ($figura == "circulo") {
    echo "Digite o raio do círculo: ";
    $raio = floatval(trim(fgets(STDIN)));
    echo "A área do círculo é: " . areaCirculo($raio) . "\n";
} else {
    echo "Figura geométrica inválida.\n";
}

?>
