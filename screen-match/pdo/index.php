<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Murillo Vinícius',
    new \DateTimeImmutable('2002-12-13')
);

echo $student->age();