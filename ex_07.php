<?php

function calcularDesconto($valor)
{
    $desconto = 0;

    if($valor > 1000){
        $desconto = 30;
    }
    elseif($valor > 500){
        $desconto = 20;
    }
    elseif($valor > 100){
        $desconto = 10;
    }

    $valorDesconto = ($valor * $desconto)/100;
    $valorFinal = $valor - $valorDesconto;

    return [
        "Valor Original" => $valor,
        "Desconto (%)" => $desconto,
        "Valor Desconto" => $valorDesconto,
        "Valor Final" => $valorFinal
    ];
}

$resultado = calcularDesconto(1200);

foreach($resultado as $chave => $valor){
    echo "$chave: $valor <br>";
}

?>