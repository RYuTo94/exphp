<?php
    //ex. 9
    $mascote = [
        //ex.a
        "animal" => "gato",
        //ex. b
        "idade" => 3,
        //ex. c
        "altura" => 0.40,
        //ex. d
        "nome" => "Félix",
    ];
    // ex. 10
    foreach ($mascote as $chave => $valor) {
        echo "$chave: $valor"."<br>";
    }
?>