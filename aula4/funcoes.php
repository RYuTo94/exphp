<?php
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
?>