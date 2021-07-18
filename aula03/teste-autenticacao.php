<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor};
use Alura\Banco\Service\Autenticador;


$umaDiretora = new Diretor(
    "Ana Marques",
    new CPF("132.465.798-12"),
    10000
);

$autenticador = new Autenticador();

$autenticador->tentaLogin($umaDiretora, "1234");