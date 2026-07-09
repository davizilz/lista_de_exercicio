<?php

function ordenarNomes($lista)
{
    $nomes = explode(",", $lista);

    $nomes = array_map("trim", $nomes);

    sort($nomes);

    return $nomes;
}

$lista = "Carlos, Ana, João, Maria, Pedro, Beatriz";

$nomesOrdenados = ordenarNomes($lista);

echo "Lista organizada:<br>";

foreach ($nomesOrdenados as $nome) {
    echo $nome . "<br>";
}

?>