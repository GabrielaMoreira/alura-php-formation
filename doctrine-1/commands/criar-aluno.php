<?php

use Alura\Doctrini\Entity\Aluno;
use Alura\Doctrini\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();
//$aluno->setNome('Vinicios Dias');
$aluno->setNome($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);
//$aluno->setNome('Vinicios Noites');

$entityManager->flush();
