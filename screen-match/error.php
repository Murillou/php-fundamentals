<?php

use ScreenMatch\Calcs\RatingConverter;
use ScreenMatch\Exception\InvalidGradeExpection;
use ScreenMatch\Model\Episode;
use ScreenMatch\Model\Gender;
use ScreenMatch\Model\Series;

require 'autoload.php';

$serie = new Series('Name Series', 2024, Gender::Acao, 7, 20, 30);
$episode = new Episode($serie, 'Piloto', 1);

try{
  $episode->evaluate(59);
  $episode->evaluate(-10);

} catch(InvalidGradeExpection $error){
  echo "Erro encontrado: " . $error->getMessage();
}

$convert = new RatingConverter();
echo $convert->convert($episode);