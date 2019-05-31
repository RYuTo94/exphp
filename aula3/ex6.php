<?php
    $nomes = ["Rodrigo", "Antonio","Solange","Denise","Lilian"];
    $num = count($nomes);
    //ex. a
    for ($i=0; $i < $num; $i++) { 
        echo $nomes[$i]."<br>";
    }
    //ex. b
    $i = 0;
    while ($i < $num){
        echo $nomes[$i]."<br>";
        $i++;
    }
    //ex. c
    $i = 0;
    do {
        echo $nomes[$i]."<br>";
        $i++;
    } while ($i < $num);
?>