<?php

// (x² + y²) / (x+y)

function calcularFormula($x,$y){
if ($x + $y == 0) {
    return "Não possível realizar a divisão por zero";

}
    $resultado = (pow($x,2) + pow($y,2))/($x + $y);

}

$x = 10;
$y = 5;

echo "Valor de X é: $x <br>";
echo "Valor de Y é: $y <br>";

echo "O resultado: " . calcularFormula($x, $y);

?>