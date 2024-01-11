<?php
// Traccia 1

$users=[
    ['name'=>'Andrea','surname'=>'Vaia','gender'=>'M'],
    ['name'=>'Sandra','surname'=>'Gemelli','gender'=>'F'],
    ['name'=>'Optimus','surname'=>'Prime','gender'=>'NB']];

    $genere;
    $saluto;

    foreach($users as $users){
        if($users['gender']=='M'){
            echo 'Buongiorno SIG.' . " " . $users['name'] . " " . $users['surname'] . "\n";
            $genere = 'Sig.';
        }
        else if($users['gender']==='F'){
            echo 'Buongiorno SIG.RA' . " " . $users['name'] . " " . $users['surname'] . "\n";
            $genere = 'Sig.ra';
        }
        else{
            echo 'Buongiorno sono ' . $users['name'] . " " . $users['surname'] . "\n";
            $genere = 'NB';
        }

       
    }