<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco};

$umEndereco = new Endereco(
    "Petropolis",
    "Bairro Qualquer",
    "Minha Rua",
    "71B"
);

$outroEndereco = new Endereco(
    "Rio de Janeiro",
    "Centro",
    "Uma Rua Ai",
    "50"
);

//metodos magicos
echo $umEndereco . PHP_EOL;
echo $outroEndereco->cidade .PHP_EOL;