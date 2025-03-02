<?php

$hour = 15;

if($hour > 12 && $hour < 18){
    echo "Boa tarde";
} elseif ($hour > 18 && $hour < 23){
    echo "Boa noite";
}
