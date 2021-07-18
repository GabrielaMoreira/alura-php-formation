<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Endereco, CPF};


$endereco = new Endereco("Petropolis", "um bairro", "minha rua", "71B");

$vinicios = new Titular(new CPF("123.456.789-10"), "Vinicios Dias", $endereco);
$primeiraConta = new ContaCorrente($vinicios);
$primeiraConta->deposita(500);
$primeiraConta->saca(100);

echo $primeiraConta->recuperaSaldo() .PHP_EOL;

$patricia = new Titular(new CPF("321.654.987-01"), "Patricia Dias", $endereco);
$segundaConta = new ContaPoupanca($patricia);
$segundaConta->deposita(500);
$segundaConta->saca(100);

echo $segundaConta->recuperaSaldo() .PHP_EOL;
