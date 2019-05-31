<?php
$cara = 0;
$cont = 0;
    do {
        $moeda = mt_rand(0,1);
        if($moeda == 1){
            $cara++;
            $cont++;
        } else {
            $cont++;
        }
    } while ($cara < 1);
    echo "A moeda foi jogada $cont vezes";
?>