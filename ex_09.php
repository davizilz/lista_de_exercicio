<?php

function analisarNumero($numero)
{
    if ($numero % 2 == 0) {
        $paridade = "Par";
    } else {
        $paridade = "Ímpar";
    }

    if ($numero < 2) {
        $primo = "Não é primo";
    } else {
        $ehPrimo = true;

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $ehPrimo = false;
                break;
            }
        }

        if ($ehPrimo) {
            $primo = "É primo";
        } else {
            $primo = "Não é primo";
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero && $numero > 0) {
        $perfeito = "É perfeito";
    } else {
        $perfeito = "Não é perfeito";
    }

    return [
        "Paridade" => $paridade,
        "Primo" => $primo,
        "Perfeito" => $perfeito
    ];
}

$numero = 28;

$resultado = analisarNumero($numero);

echo "Número: " . $numero . "<br>";
echo "Paridade: " . $resultado["Paridade"] . "<br>";
echo "Primo: " . $resultado["Primo"] . "<br>";
echo "Perfeito: " . $resultado["Perfeito"];

?>