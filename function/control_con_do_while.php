<?php
function calcular_pension($edad,$aportada,$interes,$total){

    do{
        echo '<p> AÑOS: '.$edad.'  APORTADO MENSUAL: '.$aportada.' TOTAL: '.round($total,2);
        $total = ($aportada*12)+(($total*$interes/100)+$total);
        $edad++;
    }while($edad <= 65);
}
?>
