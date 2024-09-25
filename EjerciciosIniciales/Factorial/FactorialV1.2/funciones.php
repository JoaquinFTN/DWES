<?php
    /*Calcular los factoriales*/
    function calcFactorial($i){
        $calc=1;
        for ($j=1; $j<=$i; $j++){
            $calc=$calc*$j;
        }
        return $calc;
    }
?>