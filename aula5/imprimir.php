<?php 
    var_dump($_POST);
    echo "<br>";

    echo $_POST['nome']."<br>";

    foreach ($_POST as $chave => $valor) {
        echo $valor."<br>";
    }
?>