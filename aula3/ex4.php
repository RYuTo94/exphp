<?php
$cara = 0;
$cont = 0;
    while ($cara < 5) {
        $moeda = mt_rand(0,1);
        if($moeda == 1){
            $cara ++;
            $cont ++;
        } else {
            $cont ++;
        }
    }
    echo "A moeda foi jogada $cont vezes";
?>