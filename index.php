<?php

    include "./includes/header.php";
    include "./domain/Cliente.php";

    $cliente = new Cliente('Juan','25252525Q','AD345',2400);


?>

<div class="intro">
    <div class="intro_container">
    <p>Año de nacimiento:</p>
        <form method="POST">
            <input type="number" name="anno">
            <br>
            <input type="submit" name="submit" value="Enviar ">
        </form>
        <?php
            //isset evita la variable nula
            if(isset($_POST['anno'])){
                $anno = $_POST['anno'];

                $actual = date('Y');
                $edad = $actual - $anno;
                echo '<p>Tienes '.$edad.' años</p>';
                 /** PRUEBA ESTRUCTURA DE CONTROL IF.
                  *Solo nos muestra el enlace si la edad es mayor de 18
                  */
                if ($edad > 18) {
                    echo '<div class="resultado_edad">
                            <p> Pulsa el<a href="ifelse.php">enlace</a> para continuar </p>
                          </div>';
                }
            }

        ?>
    </div>
</div>


<?php
include "./includes/footer.php";
?>