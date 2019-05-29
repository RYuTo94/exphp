<?php
    //ex. a
    $inteiro = 5;
        echo $inteiro."<br>";
        var_dump ($inteiro);
        echo "<br>";   
    //ex. b
    $decimal = 18.8;
        echo $decimal."<br>";
        var_dump ($decimal);
        echo "<br>";      
    //ex. c
    $aspasSimples = 'a';
        echo $aspasSimples."<br>";
        var_dump ($aspasSimples);
        echo "<br>";  
    //ex. d
    $aspasDuplas = "b";
        echo $aspasDuplas."<br>";
        var_dump ($aspasDuplas);
        echo "<br>";
    //ex. e
    $arrayAspasSimples = ['Olá'];
        echo $arrayAspasSimples[0]."<br>";
        var_dump ($arrayAspasSimples);
        echo "<br>";
    //ex. f
    $arrayAspasDuplas = ["Mundo"];
        echo $arrayAspasDuplas[0]."<br>";
        var_dump ($arrayAspasDuplas);
        echo "<br>";
    //ex. g
    $arrayPontoA = [$inteiro => "Olá meu chegado!"];
        echo $arrayPontoA[$inteiro]."<br>";
        var_dump ($arrayPontoA);
        echo "<br>";
    //ex. h
    $decimalPontoE = [$arrayAspasSimples[0] => 19.94];
        echo $decimalPontoE[$arrayAspasSimples[0]]."<br>";
        var_dump ($decimalPontoE);
        echo "<br>";
    //ex. i - Eles são associados a valores indicados anteiormente por uma variável
    //ex. j - Altera somente o tipo de dado e o valor de associação do ex. g
?>
    
    