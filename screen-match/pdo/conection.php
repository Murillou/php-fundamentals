<?php

$srcBanco = __DIR__ . "/banco.sqlite";
$pdo = new PDO('sqlite:' . $srcBanco);

echo "Successful!";