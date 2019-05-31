<?php
$ceu = [
    "Itália"=>"Roma", 
    "Luxemburgo"=>"Luxemburgo",
    "Bélgica"=> "Bruxelas", 
    "Dinamarca"=>"Copenhagen",
    "Finlândia"=>"Helsinki", 
    "França" => "Paris",
    "Eslováquia"=>"Bratislava", 
    "Eslovênia"=>"Liubliana",
    "Alemanha" => "Berlim", 
    "Grécia" => "Atenas",
    "Irlanda"=>"Dublin", 
    "Holanda"=>"Amsterdã",
    "Portugal"=>"Lisboa", 
    "Espanha"=>"Madri",
    "Suécia"=>"Estocolmo", 
    "Reino Unido"=>"Londres",
    "Chipre"=>"Nicósia", 
    "Lituânia"=>"Vilnius", 
    "República Tcheca"=>"Praga", 
    "Estônia"=>"Tallinn",
    "Hungria"=>"Budapeste", 
    "Letônia"=>"Riga",
    "Malta"=>"Valletta", 
    "Áustria" => "Viena",
    "Polônia"=>"Varsóvia"];
ksort($ceu);
foreach ($ceu as $chave => $valor) {
    echo "A capital da(o) $chave é $valor"."<br>";
}
?>