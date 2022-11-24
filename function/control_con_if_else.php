<?php
function validar_opcion($eleccion)
{
    if ($eleccion === "cuenta"){
        header('Location: addacount.php');
        exit;
    } else  {
        header('Location: borrow.php');
        exit;
    }
}
?>