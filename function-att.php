<?php 

function some(int $valueOne, int $valueTwo): int {
  return $valueOne + $valueTwo;
}

echo some(1, 2);
echo ("\n");

function imc(float $pound, float $height): float {
  return $pound / ($height ** 2);
};

echo imc(80, 1.80);
echo ("\n");

function convertCelsiusToFahrenheit(int $celsius): float {
  return $celsius * 1.8 + 32;
}

echo convertCelsiusToFahrenheit(1);