<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};
use \Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    "Vinicios Dias",
    new CPF("123.456.789-10"),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    "Patricia Dias",
    new CPF("321.654.987-01"),
    3000
);

$umaDiretora = new Diretor(
    "Ana Marques",
    new CPF("132.465.798-12"),
    5000
);

$umEditor = new EditorVideo(
    "Paulo",
    new CPF("231.486.598-45"),
    3500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umaDiretora);

echo $controlador->recuperaTotal() .PHP_EOL;
