<?php

$correntistas = [
    "Giovana",
    "Joao",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael"
];

$correntistasPagentes = array_diff($correntistas, $correntistasNaoPagantes);

echo "<pre>";
var_dump($correntistasPagentes);
echo "</pre>";