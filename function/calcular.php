<?php
function calcularInteres($recibo,$nomina,$interes)
{
    if ($recibo == "si" && $nomina == "si"){
         $interes = $interes - 1;
    }elseif ($recibo == "si" && $nomina == "no"){
         $interes = $interes - 0.5;
    }elseif ($recibo == "no" && $nomina == "si"){
         $interes = $interes - 0.6;
    }else{
         $interes = 4.50;
    }
    echo"<div><p>INTERES A APLICAR: ".$interes."</p></div>";
}
