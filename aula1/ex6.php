<?php
    $inteiro = 14;
    $decimal = 3.5;
    //ex. a
    echo $inteiro + $decimal ."<br>";
    //ex. b
    echo $inteiro - $decimal ."<br>";
    //ex. c
    echo $inteiro / $decimal ."<br>";
    //ex. d
    echo $inteiro * $decimal ."<br>";
    //ex. e
    $resto = $inteiro % $decimal;
    echo $resto ."<br>";
    //ex. f
    $inteiro = $inteiro + 1;
    $decimal = $decimal + 1;
    echo $inteiro."<br>".$decimal."<br>";
    //ex. g
    $inteiro = $inteiro + 5;
    $decimal = $decimal - 0.6;
    echo $inteiro."<br>".$decimal."<br>";
    //ex. h
    $resultado = ($inteiro * 2 + $decimal) / ($inteiro / 2);
    echo $resultado;  
?>