<?php
    $carro = [
        "Marca" => "Chevrolet",
        "Modelo" => "Onix",
        "Cor" => "Vermelho",
        "Ano" => "2015",
        "Placa" =>"FYT-1133"
    ];
    var_dump($carro);
    echo "<br>";
    //ex. a
    $carro[0] = "Rodrigo Toguti";
    var_dump($carro);
    echo "<br>";
    //ex. b
    $carro[14] = "Sompo Seguros";
    var_dump($carro);
    echo "<br>";
    //ex. c
    $carro["Apólice"] = "18081994";
    var_dump($carro);
    echo "<br>";
    //ex. d
    $carro[0] = "Antonio Toguti";
    var_dump($carro);
    echo "<br>";
    //ex. e
    $carro["Placa"] = "GES-9553";
    var_dump($carro);
    echo "<br>";
?>