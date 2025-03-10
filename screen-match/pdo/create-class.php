<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
try{
$aStudent = new Student(null, 'Nico Steppat', new DateTimeImmutable('1990-05-02'));
$studentRepository->save($aStudent);

$anotherStudent = new Student(null, 'Sergio Dantas', new DateTimeImmutable('1980-02-10'));
$studentRepository->save($anotherStudent);

$connection->commit();

} catch (\PDOException $error) {
    echo $error->getMessage();
    $connection->rollBack();
}

