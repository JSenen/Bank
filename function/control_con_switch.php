<?php
function calculo_cambio($cantidad,$moneda){

    switch ($moneda) {
        case 'euro':
            echo $cantidad."€ =".$cantidad*1.037.' Dolares <br>';
            echo $cantidad.'€ ='.$cantidad*145.5.' Yenes <br> ';
            echo $cantidad.'€ ='.$cantidad*0.86.' Libras';
            break;
        case 'dolar':
            echo $cantidad.'$ ='.$cantidad*0.96.' Euros <br>';
            echo $cantidad.'$ ='.$cantidad*140.65.' Yenes <br>';
            echo $cantidad.'$ ='.$cantidad*0.83.' Libras <br>';
            break;
        case 'yen':
            echo $cantidad.'Yenes = '.$cantidad*0.006.' Euros <br>';
            echo $cantidad.'Yenes = '.$cantidad*0.007.' $  <br>';
            echo $cantidad.'Yenes = '.$cantidad*0.005.' Libras';
            break;
        case 'libra':
            echo $cantidad.'Libras = '.$cantidad*1.15.' Euros  <br>';
            echo $cantidad.'Libras = '.$cantidad*1.19.' $ <br>';
            echo $cantidad.'Libras = '.$cantidad*168.26.' Yenes';

    }
}
?>
