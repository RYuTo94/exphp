<?php
$funcoesExecutadas = 0;

include "funcoes.php";
include "superficie.php";

$c1 = circulo(mt_rand(1,5));
echo $funcoesExecutadas."<br>";
$c2 = circulo(mt_rand(1,5));
echo $funcoesExecutadas."<br>";
$c3 = circulo(mt_rand(1,5));
echo $funcoesExecutadas."<br>";

echo maior($c1,$c2,$c3)."<br>";
echo $funcoesExecutadas."<br>";
?>