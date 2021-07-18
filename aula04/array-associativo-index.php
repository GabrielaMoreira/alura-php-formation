<?php

$correntistas = [
    "Giovana",
    "Joao",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldo = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$append = array_merge($correntistas,$saldo);

//array associativo ou map
$relacionados = array_combine($correntistas,$saldo);

$relacionados["Matheus"] = 4500;
echo $relacionados["Maria"] . PHP_EOL;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";
