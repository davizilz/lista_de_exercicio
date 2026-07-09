<?php

function criptografarMensagem($texto)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];

        if (ctype_alpha($caractere)) {

            $ascii = ord($caractere);

            if (ctype_upper($caractere)) {
                $resultado .= chr((($ascii - 65 + 3) % 26) + 65);
            } else {
                $resultado .= chr((($ascii - 97 + 3) % 26) + 97);
            }

        } else {
            $resultado .= $caractere;
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];

        if (ctype_alpha($caractere)) {

            $ascii = ord($caractere);

            if (ctype_upper($caractere)) {
                $resultado .= chr((($ascii - 65 - 3 + 26) % 26) + 65);
            } else {
                $resultado .= chr((($ascii - 97 - 3 + 26) % 26) + 97);
            }

        } else {
            $resultado .= $caractere;
        }
    }

    return $resultado;
}

$mensagem = "Programacao em PHP";

$criptografada = criptografarMensagem($mensagem);

$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $criptografada . "<br>";
echo "Mensagem descriptografada: " . $descriptografada;

?>