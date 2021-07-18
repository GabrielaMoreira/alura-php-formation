<?php

use Alura\Doctrini\Entity\Telefone;
use Alura\Doctrini\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$dql = 'SELECT aluno FROM Alura\\Doctrini\Entity\Aluno aluno';
$query = $entityManager->createQuery($dql);
$alunoList = $query->getResult();

foreach ($alunoList as $aluno){
    //todos devem possuir telefone
    $telefones = $aluno
        ->getTelefones()
        ->map(function(Telefone $telefone){
            return $telefone->getNumero();
        })
        ->toArray();

    echo "ID: {$aluno->getId()}" . PHP_EOL . "Nome: {$aluno->getNome()}" . PHP_EOL;
    echo "Telefones: " . implode(', ',$telefones) . PHP_EOL . PHP_EOL;
}

//aluno especifico (doctrine query)
$dql2 = 'SELECT aluno FROM Alura\\Doctrini\Entity\Aluno aluno WHERE aluno.id = 1';
$query2 = $entityManager->createQuery($dql2);
$alunoList2 = $query2->getResult();

foreach ($alunoList2 as $aluno){
    //todos devem possuir telefone
    $telefones = $aluno
        ->getTelefones()
        ->map(function(Telefone $telefone){
            return $telefone->getNumero();
        })
        ->toArray();

    echo "ID: {$aluno->getId()}" . PHP_EOL . "Nome: {$aluno->getNome()}" . PHP_EOL;
    echo "Telefones: " . implode(', ',$telefones) . PHP_EOL . PHP_EOL;
}
