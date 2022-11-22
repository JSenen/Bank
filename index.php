<?php

    include "./includes/header.php";
    include "./function/validar.php";

?>
<!-- CON LA FUNCION VALIDAR EDAD EJECUTAMOS IF -->

<div class="intro">
    <div class="intro_container">
    <h2>EDAD:</h2>
        <form method="GET" >
            <input type="text" name="age">
            <br>
            <input type="submit" name="submit" value="Enviar ">
        </form>
        <?php
        if (isset($_GET['age'])) {
            $age = $_GET['age'];
            validar_edad($age);
        }
        ?>
    </div>
</div>


<?php
include "./includes/footer.php";
?>