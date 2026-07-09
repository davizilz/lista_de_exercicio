<?php

function calcularMedia($notas)
{
    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "Maior Nota" => $maior,
        "Menor Nota" => $menor,
        "Média" => number_format($media, 2, ",", "."),
        "Situação" => $situacao
    ];
}

$notas = [8.5, 7.0, 9.0, 6.5];

$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado["Maior Nota"] . "<br>";
echo "Menor nota: " . $resultado["Menor Nota"] . "<br>";
echo "Média: " . $resultado["Média"] . "<br>";
echo "Situação: " . $resultado["Situação"];

?>