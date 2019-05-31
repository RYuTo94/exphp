<?php

    $limite = mt_rand(0,100);
    
    for($i = 0; $i <= 100; $i++) {
        if ($i == $limite) {
            break;
        }
        echo $i . "<br>";
    }
?>