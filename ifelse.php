<?php

include "./includes/header.php";
include "./domain/Cliente.php";

$cliente = new Cliente('Juan','25252525Q','AD345',2400);


?>
<div class="ifelse">
    <div class ifelse_container>
        <p>INTRODUZCA SU NOMBRE: </p>
        <form action="" method="POST">
           <label>NOMBRE: </label>  <input type="text" name="name"><br>
            <label>DNI: </label>  <input type="text" name="dni"><br>
            <label>NUMERO CUENTA: </label>  <input type="text" name="numcuenta"><br>
            <label>SALDO INICIAL: </label>  <input type="text" name="saldoinicial"><br>
            <input type="submit">
        </form>
        <?php
            if(isset($_POST['name'], $_POST['dni'], $_POST['numcuenta'], $_POST['saldoinical'])) {

                $nombre = $_POST['name'];
                $documento = $_POST['documento'];
                $cuenta = $_POST['numcuenta'];
                $saldo = $_POST['saldoinical'];

                if(($nombre == "") ){
                    echo "<p>Debe rellenar todos los campos</p>";


                }else{
                    echo "<p>Hola $nombre, su DNI es $documento y acaba de crear la cuenta $cuenta con un saldo inicial de $saldo </p>";
                }
                echo '<div class="resultado_edad">
                         <p> Pulsa el<a href="ifelse.php">enlace</a> para continuar </p>
                      </div>';

            }
            ?>

    </div>
</div>
