<?php

require_once 'vendor/autoload.php';

use \Alura\Pdo\Domain\Model\Student;

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(
    null,
    'Vinicios Dias',
    new DateTimeImmutable('1997-10-18')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));
