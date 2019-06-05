<?php
$lol = getallheaders();
foreach ($lol as $chave => $valor) {
    echo $chave. " : " .$valor."<br>";
}