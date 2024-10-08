<?php

function fibonacci($n) {
    $fib = [0, 1]; // Iniciamos con los dos primeros números

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; // Suma de los dos anteriores
    }

    return $fib;
}

$n = 10; // Número de elementos a generar
$resultado = fibonacci($n);

echo "Los primeros $n números de Fibonacci son: " . implode(", ", $resultado);
