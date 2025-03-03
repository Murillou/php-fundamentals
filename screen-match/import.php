<?php

$fileWay = __DIR__ . '/movie.json';
$contentFileMovie = file_get_contents($fileWay);
$movie = json_decode($contentFileMovie, true);

var_dump($movie);