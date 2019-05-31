<?php

    $x = mt_rand(1,100);
    $y = mt_rand(1,100);

    if ($x > $y) {
        echo "X é maior que Y";
    } elseif ($y > $x) {
        echo "Y é maior que X";
    } else {
        echo "X e Y são iguais";
    }

?>