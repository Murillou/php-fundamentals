<?php

require __DIR__ . "/src/Model/Gender.php";
require __DIR__ . "/src/Model/Description.php";
require __DIR__ . "/src/Model/Movie.php";
require __DIR__ . "/src/Model/Series.php";
require __DIR__ . "/src/Calcs/MarathonCalculator.php";

echo "Bem vindo(a) ao ScreenMatch\n";

$movie = new Movie('Shrek 5', 2021, Gender::Animacao, 180);

$movie->evaluate(10);
$movie->evaluate(10);
$movie->evaluate(5);
$movie->evaluate(5);

var_dump($movie);

echo $movie->media() . "\n";

echo $movie->dataRelease . "\n";

$serie = new Series('Origem', 2022, Gender::Animacao, 10, 20, 50);

echo $serie->dataRelease . "\n";

$serie->evaluate(8);

echo $serie->media() . "\n";

$calculator = new MarathonCalculator();
$calculator->include($movie);
$calculator->include($serie);
$duration = $calculator->getDuration();

echo "Para essa maratona, você precisa de $duration minutos";