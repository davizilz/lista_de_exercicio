
<?php

function formatarTexto($texto)
{
    $maiusculas = strtoupper($texto);
    $minusculas = strtolower($texto);
    $primeirasMaiusculas = ucwords(strtolower($texto));
    $quantidadeCaracteres = strlen($texto);

    return [
        "Maiúsculas" => $maiusculas,
        "Minúsculas" => $minusculas,
        "Primeiras Maiúsculas" => $primeirasMaiusculas,
        "Quantidade de Caracteres" => $quantidadeCaracteres
    ];
}

$texto = "php é uma linguagem de programação muito poderosa.";

$resultado = formatarTexto($texto);

foreach ($resultado as $chave => $valor) {
    echo "$chave: $valor <br>";
}