<?php

use Alura\Doctrini\Entity\Aluno;
use Alura\Doctrini\Entity\Telefone;
use Alura\Doctrini\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunosRepository = $entityManager->getRepository(Aluno::class);

$classeAluno = Aluno::class;
$dql = "SELECT aluno, telefones, cursos 
        FROM $classeAluno aluno 
            JOIN aluno.telefones telefones 
            JOIN aluno.cursos cursos";

$query = $entityManager->createQuery($dql);

/** @var Aluno[] $alunos */
$alunos = $query->getResult();

foreach ($alunos as $aluno){

    $telefones = $aluno
        ->getTelefones()
        ->map(function(Telefone $telefone){
            return $telefone->getNumero();
        })
        ->toArray();

    echo "ID: {$aluno->getId()} \n";
    echo "Nome: {$aluno->getNome()} \n";
    echo "Telefones: " . implode(", ",$telefones) . PHP_EOL;


    $cursos = $aluno->getCursos();
    foreach ($cursos as $curso){

        echo "\tID Curso: {$curso->getId()}\n";
        echo "\tCurso: {$curso->getNome()}\n";
        echo "\n";
    }
    echo "\n";

}