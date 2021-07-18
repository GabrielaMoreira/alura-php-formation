<?php

use Alura\Doctrini\Entity\Aluno;
use Alura\Doctrini\Entity\Telefone;
use Alura\Doctrini\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
//$aluno->setNome('Vinicios Dias');
$aluno->setNome($argv[1]);

for($i = 2; $i < $argc; $i++){
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);

    $entityManager->persist($telefone);
    $aluno->addTelefone($telefone);
}

echo "Adicionado";


$entityManager->persist($aluno);
//$aluno->setNome('Vinicios Noites');

$entityManager->flush();
