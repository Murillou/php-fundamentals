<?php

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
$planInclude = $primePlan || $dataRelease < 2020;

echo "Nome do filme: " . $movieName . "\n";
echo "Nota do filme: $movieGrade\n";
echo "Ano de lançamento: $dataRelease \n";

if($dataRelease > 2024) {
  echo "Esse filme é um lançamento.\n";
} elseif($dataRelease > 2020 && $dataRelease < 2024) {
 echo "Esse filme ainda é novo.\n";
}
 else {
  echo "Esse filme não é um lançamento\n";
};

$genero = match ($movieName) {
   "Top Gun - Maverick" => "Ação",
   "Shrek 5" => "Aventura",
   "Esposa de mentirinhas" => "Comédia",
   default => 'Desconhecido'
};

echo "O genêro do filme é: $genero \n";


$filme = [
  "nome" => "Shrek 5",
  "ano" => 2021,
  "nota" => 9,
  "gênero" => "animação",
];

echo $filme["gênero"];