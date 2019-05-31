<?php
    $numeros = [mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10)];
    $num = count($numeros);
    //ex. a
    for ($i=0; $i < $num; $i++) { 
        echo $numeros[$i]."<br>";
        if ($numeros[$i] == 5) {
            echo "Encontramos um 5!"."<br>";
            break;
        }
    }
    //ex. b
    $i = 0;
    while ($i < $num){
        echo $numeros[$i]."<br>";
        if ($numeros[$i] == 5) {
            echo "Encontramos um 5!"."<br>";
            break;
        }
        $i++;
    }
    //ex. c
    $i = 0;
    do {
        echo $numeros[$i]."<br>";
        if ($numeros[$i] == 5) {
            echo "Encontramos um 5!"."<br>";
            break;         
        }
        $i++;
    } while ($i < $num);
?>