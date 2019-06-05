<?php
    session_start();
    foreach ($_SERVER as $chave => $valor) {
        echo $chave. " : " .$valor."<br>";
    }
    echo "<br>";
    foreach ($_FILES as $chave => $valor) {
        echo $chave. " : " .$valor."<br>";
    }
    echo "<br>";
    foreach ($_REQUEST as $chave => $valor) {
        echo $chave. " : " .$valor."<br>";
    }
    echo "<br>";
    foreach ($_SESSION as $chave => $valor) {
        echo $chave. " : " .$valor."<br>";
    }
    echo "<br>";
    foreach ($_ENV as $chave => $valor) {
        echo $chave. " : " .$valor."<br>";
    }
    echo "<br>";
    foreach ($_COOKIE as $chave => $valor) {
        echo $chave. " : " .$valor."<br>";
    }
    echo "<br>";
    foreach ($GLOBALS as $chave => $valor) {
        echo $chave."<br>";
    }
?>