<?php

require_once 'vendor/autoload.php';

use \Alura\Pdo\Domain\Model\Student;
use \Alura\Pdo\Infrastructure\Persistence\ConnectionFactory;

$pdo = ConnectionFactory::createConnection();

$student = new Student(
    null,
    'Gloria Dias',
    new DateTimeImmutable('1976-05-12')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1,$student->name());
$statement->bindValue(2,$student->birthDate()->format('Y-m-d'));

if($statement->execute()){
    echo "Aluno incluido";
}else{
    echo "Erro ao incluir aluno";
}
