<?php

function calcular_amortizacion($cantidad,$anyos,$interes){
   $meses = $anyos*12;
   $cuota = ($cantidad+(($cantidad*$interes)/100))/$meses;
   $cantidad = $cantidad+(($cantidad*$interes)/100);
    while ($meses > 0 ){
        echo "<p> Mes: ".$meses." cantidad = ".round($cantidad,2)."   cuota= ".round($cuota,2)."   interes ".$interes;
        $meses = $meses-1;
        $cantidad = $cantidad - $cuota;
    }

}
?>
