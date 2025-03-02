<?php 

$grades = [10, 4, 5, 7, 8];

foreach($grades as $grade){
  if($grade > 6){
    echo "Você foi aprovado, parabéns!\n";
  } else {
    echo "Você foi reprovado.\n";
  }
}
