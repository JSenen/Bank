<?php
 function validar_edad($age)
 {

     if ($age >= 18)
         header('Location: optionpage.php');

  }
  function validar_opcion($opcion)
  {
      if ($opcion = "cuenta"){
          header('Location: addacount.php');
      }else{
          echo "SELECCION PRESTAMO";
      }
  }
?>