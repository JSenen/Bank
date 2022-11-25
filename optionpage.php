<?php

require_once "./includes/header.php";
include "./domain/Cliente.php";
include "./function/control_con_if_else.php";
?>

    <!-- CON LA FUNCION SI QUIERE CREAR CUENTA O SOLICITAR PRESTAMO VALIDAMOS IF..ELSE -->

    <div class="intro">
        <div class="intro_container">
            <form action="optionpage.php" method="get">
                <label for="lang">Seleccione una opción:</label>
                <select name="opciones" id="option">
                    <option value="cuenta">Crear cuenta</option>
                    <option value="prestamo">Solicitar prestamo</option>
                </select>
                <input type="submit" value="Enviar" class="btn"/>
            </form>

        <?php
            if(isset($_GET["opciones"])){
                $opcion = $_GET["opciones"];
                 validar_opcion($opcion);
            }
?>
        </div>
    </div>
<?php
include "./includes/footer.php";
?>