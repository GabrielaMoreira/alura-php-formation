<?php

use Alura\Doctrini\Entity\Aluno;
use Alura\Doctrini\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);


$id = $argv[1];
$novoNome = $argv[2];

$aluno = $alunoRepository->find($id);
$aluno->setNome($novoNome);

$entityManager->persist($aluno);
$entityManager->flush();