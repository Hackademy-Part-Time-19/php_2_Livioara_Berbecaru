<?php

//traccia 5

$temperatura =[
    'Venezia' => 16,
    'Bari' => 32,
    'Roma' => 16,
    'Napoli' => 30,
    'Milano' => 13,
    'Palermo' => 14,
    'Torino' => 24,
    'Lecce' => 27,
    'Genova' => 30,
    'Catania' => 11,
    'Cosenza' => 9,];

    foreach ($temperatura as $key => $value) {
        if ($value>=15 && $value<25) {
            echo "A ($key) fa caldo con ($value)°C\n";
        }elseif ($value>25){
            echo "A ($key) fa molto caldo con ($value)°C\n";
        }else{
            echo "A ($key) fa freddo con ($value)°C\n";
        }
    }