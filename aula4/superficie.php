<?php
$funcoesExecutadas++;
//ex. a
function triangulo($base, $altura){
    $area = ($base * $altura) / 2;
    return $area;
}
//ex. b
function retangulo($largura, $comprimento){
    $area = $largura * $comprimento;
    return $area;
}
//ex. c
function quadrado($lado){
    $area = $lado ** 2;
    return $area;
}
//ex. d
function circulo($raio){
    $area = pi() * ($raio ** 2);
    return $area;
}
?>