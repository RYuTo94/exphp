<?php
$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];

    foreach($ceu as $chave => $valor) {
        $maxcol = count($valor);
        echo "As cidades da $chave são:";
        echo "<ul>";
            for ($col=0; $col < $maxcol ; $col++) { 
                echo "<li>".$valor[$col]."</li>";
            }
        echo "</ul>";    
    }
?>