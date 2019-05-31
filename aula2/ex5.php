<?php
    $num = mt_rand(0,100);

    if($num > 50 && $num % 2 == 0){
        echo "O número cumpre a condição";
    } else {
        echo "O número NÃO cumpre a condição";
    }

    echo "<br>";
    
    //ex. a
    if($num == 0 || $num > 50 && $num % 2 == 0){
        echo "O número cumpre a condição";
    } else {
        echo "O número NÃO cumpre a condição";
    }    
?>
