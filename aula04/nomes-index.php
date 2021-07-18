<?php

$nomes = [
    "Giovana",
    "João",
    "Maria",
    "Pedro"
];

$stringNome = "Manuel, Clara, Jose, Camila";
$array = explode(", ",$stringNome);

foreach ($nomes as $pessoa){
    echo "<p>Nome: {$pessoa}</p>";
}

foreach ($array as $pessoa){
    echo "<p>Nome: {$pessoa}</p>";
}

$texto = implode(", ", $array);
echo "<p>Nomes juntos: {$texto}</p>";
