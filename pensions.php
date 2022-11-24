<?php
include './includes/header.php';
include './function/control_con_do_while.php';
?>

<div class="intro">
    <div class="intro_container">
        <form action="pensions.php" method="POST">
            <div>Introduzca los siguientes datos</div>
            <div>
                <label  class="intro">Edad actual</label>
                <input type="number" min="18" max="65" value="18" name="edad" id="edad">
            </div>
            <div>
                <label  class="intro">Cantidad aportada mensual</label>
                <input type="number" min="20"  value="20" name="aportada" id="aportada">
            </div>
            <div>
                <p>Se le aplicará un interés del 4.30% mensual</p>
            </div>
            <div>
                <input type="submit" name="submit" value="Calcular ">
            </div>
        </form>
        <?php
        if (isset($_POST['edad'],$_POST['aportada'])){
            $edad = $_POST['edad'];
            $aportada = $_POST['aportada'];
            $interes = 4.30;
            $jubilacion = 65 - $edad;
            $total = $aportada;
            echo "Le faltan $jubilacion años para la jubilacion<br>";
            echo "CUADRO DE APORTACIÓN";
            calcular_pension($edad,$aportada,$interes,$total);
        }
        ?>
<?php
include './includes/footer.php';
?>
