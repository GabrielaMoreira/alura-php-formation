<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco("Petropolis", "um bairro", "minha rua", "71B");

$vinicios = new Titular(new CPF("123.456.789-10"), "Vinicios Dias", $endereco);
$primeiraConta = new Conta($vinicios);
$primeiraConta->deposita(1500);

$patricia = new Titular(new CPF("321.654.987-01"), "Patricia Souza", $endereco);
$segundaConta = new Conta($patricia);
$segundaConta->deposita(3500);

$segundaConta->transfere(200, $primeiraConta);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
$primeiraConta->saca(200);
echo "saldo depois de saque: " . $primeiraConta->recuperaSaldo() . PHP_EOL;

echo "qtd. de contas criadas: " . Conta::recuperaNumeroDeContas() .PHP_EOL;
