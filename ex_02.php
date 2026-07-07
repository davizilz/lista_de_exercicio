<?php

function Invertertexto ($texto)
{
    $Invertertexto = strrev($texto);
    return $Invertertexto;

}

echo ("Oi, mundo!") . "<br>";
echo "Texto invertido: " . Invertertexto("Oi, Mundo"); "<br>";

?>