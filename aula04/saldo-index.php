<?php

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $valor){
    echo "<p>O saldo é: {$valor}</p>";
}

//ordenando array de menor para maior
sort($saldos);

$tamanho = sizeof($saldos) - 1;
echo "<p>O menor saldo é: {$saldos[0]}</p>";
echo "<p>O maior saldo é: {$saldos[$tamanho]}</p>";



