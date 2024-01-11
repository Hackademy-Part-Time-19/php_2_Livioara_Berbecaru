<?php
// traccia 6
$tombola = [[],[],[],[]];

foreach ($tombola as &$sottoarray) {
    for ($i = 0; $i < 5; $i++) {
        $numeroCasuale = rand(1, 100);
        $sottoarray[] = $numeroCasuale;
    }
}


var_dump($tombola);
