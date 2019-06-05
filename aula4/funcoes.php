<?php
$funcoesExecutadas++;
//ex. a
function maior($x, $y, $z){
    if ($x > $y && $x > $z) {
        return "O maior valor é $x";
    } elseif ($y > $x && $y > $z) {
        return "O maior valor é $y";
    } elseif ($z > $x && $z > $x) {
        return "O maior valor é $z";
    } else {
        return "Os três valores são $x";
    }
}
//ex. b
function tabela($base, $limite){
    if ($limite > $base) {
        for ($i= $base; $i <= $limite; $i++){
            echo $i."<br>";
        }
    } elseif ($base > $limite){
        for ($i= $base; $i >= $limite; $i--){
            echo $i."<br>";
        }
    } else {
        echo $limite;
    }
}
//ex. c
$numeroMagico = mt_rand(1,100);
//ex. d
function maiord($a, $b){
    global $numeroMagico;
    if ($a > $b && $a > $numeroMagico) {
        return "O maior valor é $a";
    } elseif ($b > $a && $b > $numeroMagico) {
        return "O maior valor é $b";
    } elseif ($numeroMagico > $a && $numeroMagico > $b) {
        return "O maior valor é $numeroMagico";
    } else {
    return "Os três valores são $a";
    }
}
//ex. e
function tabelae($base){
    global $numeroMagico;
    if ($numeroMagico > $base) {
        for ($i= $base; $i <= $numeroMagico; $i++){
            echo $i."<br>";
        }
    } elseif ($base > $numeroMagico){
        for ($i= $base; $i >= $numeroMagico; $i--){
            echo $i."<br>";
        }
    } else {
        echo $numeroMagico;
    }
}
?>