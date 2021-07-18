<?php

require_once 'src\Alura\ArrayUtils.php';

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

$array_associativo =[
    "Gloria" => 3000,
    "Carlos" => 2500,
    "Eliza" => 4000
];

$relacionados = array_combine($correntistas,$saldo);

echo "O saldo da maria é: {$relacionados["Maria"]}" . PHP_EOL;
$maiores = ArrayUtils::encontrarPessoaComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";