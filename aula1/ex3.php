<?php 
    $variable01 = true;
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 = "true";
    $variable09 = 'false';
    $variable10 = null;

    function tipoDado($varN) {
        if ( $varN == true )
        {
        echo 'o valor ' . $varN . ' é verdadeiro.';
        }
        else
        {
        echo 'o valor ' . $varN . ' é falso.';
        }
    }
    
    tipoDado($variable10);

?>