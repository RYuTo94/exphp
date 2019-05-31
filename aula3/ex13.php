<?php
$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé" , "naAmerica" => true],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo" , "naAmerica" => true],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla" , "naAmerica" => true],
    "França" => ["Paris", "Nantes", "Lyon", "naAmerica" => false],
    "Itália" => ["Roma", "Milão", "Veneza", "naAmerica" => false],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt", "naAmerica" => false]
    ];
    
    foreach($ceu as $chave => $valor) {  
        if ($valor["naAmerica"] == true){
                $maxcol = count($valor) - 1;        
                echo "As cidades da $chave são:";
                echo "<ul>";
                for ($col=0; $col < $maxcol ; $col++) { 
                    echo "<li>".$valor[$col]."</li>";
                }
                echo "</ul>";    
            }
    }        
?>