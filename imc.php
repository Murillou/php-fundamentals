<?php

$pound = 80;
$height = 1.80;
$imc = $pound / ($height * 2);


if($imc < 18.5){
 echo "Baixo peso";
} elseif ($imc < 24.9){
  echo "Na média";
} elseif($imc < 29.9){
  echo "Sobrepeso";
}