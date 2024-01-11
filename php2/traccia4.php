<?php
$temperatura =[10,30,20];

foreach ($temperatura as $key => $value) {
    if ($value>=15 && $value<25) {
        echo "Fa caldo\n";
    }elseif ($value>25){
        echo "Fa molto caldo\n";
    }else{
        echo "Fa molto freddo\n";
    }
}