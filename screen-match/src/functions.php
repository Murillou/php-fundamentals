<?php

function displayMessageLaunch(int $year): void {
  if($year > 2024) {
    echo "Esse filme é um lançamento.\n";
  } elseif($year > 2020 && $year < 2024) {
   echo "Esse filme ainda é novo.\n";
  }
   else {
    echo "Esse filme não é um lançamento\n";
  };
}

function includeOnPlan(bool $primePlan, int $dataRelease): bool {
 return $primePlan || $dataRelease < 2020;
}

function movieCreate(string $name, int $dataRelease, float $grade, string $gender): Movie{
  $movie = new Movie();
  $movie->name = $name;
  $movie->dataRelease = $dataRelease;
  $movie->grade = $grade;
  $movie->gender = $gender;

  return $movie;
}