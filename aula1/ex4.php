<?php 
    $animais = [
        1 =>"arara",
        2 =>"macaco",
        3 =>"cachorro",
        4 =>"gato",
        5 =>"peixe"];
    var_dump($animais);
    echo "<br>";
    //ex. a
    $animais[6] = "elefante";
    $animais[7] = "tatu";
    var_dump($animais);
    echo "<br>";
    //ex. b
    var_dump("Eu gosto de animais: ".$animais[1].", ".$animais[2].", ".$animais[3].", ".$animais[4].", ".$animais[5].", ".$animais[6].", ".$animais[7]);
    echo "<br>";
    //ex. c
    $animais[1] = "leão";
    var_dump($animais);
    echo "<br>";
    //ex. d
    $animais[100] = "onça";
    var_dump($animais);
    echo "<br>";
    //ex. e
    $animais[16] = "papagaio";
    var_dump($animais);
    echo "<br>";
?>