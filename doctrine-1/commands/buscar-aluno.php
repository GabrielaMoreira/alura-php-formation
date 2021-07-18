<?php

use Alura\Doctrini\Entity\Aluno;
use Alura\Doctrini\Entity\Telefone;
use Alura\Doctrini\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/**
 * @var Aluno[] $alunoList
 */
$alunoList = $alunoRepository->findAll();

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

$outroAluno = $alunoRepository->find(4);
echo $outroAluno->getNome() . PHP_EOL . PHP_EOL;
/*
$viniciosNoites = $alunoRepository->findOneBy([
    'nome' => 'Vinicios Noites'
]);*/

//var_dump($viniciosNoites);