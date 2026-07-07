<?php

function analisarTexto(string $texto): array
{
    $palavras = array_filter(preg_split('/\s+/', trim($texto)));
    $vogais = $consoantes = 0;

    foreach (str_split(mb_strtolower($texto)) as $c) {
        if (preg_match('/[aeiouáéíóúàâêôãõ]/u', $c)) {
            $vogais++;
        } elseif (preg_match('/[a-z]/u', $c)) {
            $consoantes++;
        }
    }

    return [
        'palavras'    => count($palavras),
        'caracteres'  => mb_strlen($texto),
        'vogais'      => $vogais,
        'consoantes'  => $consoantes,
    ];
}

// Exemplo de uso
$resultado = analisarTexto('Olá, mundo! Isso é um teste.');
print_r($resultado);