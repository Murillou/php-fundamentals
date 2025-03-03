<?php

$movie = [
  "nome" => $_POST["nome"],
  "anoLancamento" => $_POST["anoLancamento"],
  "nota" => $_POST["nota"],
  "genero" => $_POST["genero"],
];

file_put_contents('movie.json', json_encode($movie));

header('Location: /success.php?movie=' . $movie['nome']);