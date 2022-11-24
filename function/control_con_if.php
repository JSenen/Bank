<?php
//Utilizamos IF
 function validar_edad($age)
 {

     if ($age >= 18)
         header('Location: optionpage.php');

  }
?>