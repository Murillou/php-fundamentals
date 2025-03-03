<?php

require __DIR__ . "/src/functions.php";

echo "Bem-vindo(a) ao screen match!\n";

$movieName = "Top Gun - Maverick";

$dataRelease = 2022;
$gradeQuantity = $argc - 1;
$grades = [];

for ($count = 1; $count < $argc; $count++) {
  $grades[] = (float) $argv[$count];
};

$movieGrade = array_sum($grades) / $gradeQuantity;

$primePlan = true;
$planInclude = includeOnPlan($primePlan, $dataRelease);

echo "Nome do filme: " . $movieName . "\n";
echo "Nota do filme: $movieGrade\n";
echo "Ano de lançamento: $dataRelease \n";

displayMessageLaunch($dataRelease);

$genero = match ($movieName) {
   "Top Gun - Maverick" => "Ação",
   "Shrek 5" => "Aventura",
   "Esposa de mentirinhas" => "Comédia",
   default => 'Desconhecido'
};

echo "O genêro do filme é: $genero \n";

$movie = movieCreate(name: "Shrek 5", year: 2025, grade: 10, gender: "Aventura");

echo $movie["name"];

sort($grades);
var_dump($grades);
$badGradeFilm = min($grades);
echo($badGradeFilm);

echo ("\n");

$movieJson = json_encode($movie);
file_put_contents(__DIR__ . '/movie.json', $movieJson);