<?php
include "./includes/header.php";
include "./function/control_con_if_elseif.php";
include "./function/control_con_while.php";

?>
<!-- CON LA SELECCIÓN DE VARIO COMPONENTES EJECUTAMOS IF..ELSEIS -->
<nav class="navegacion">
    <a href="borrow.php" class="navegacion--activo">Calculo Prestamo</a>
    <a href="pensions.php" >Calculo Plan Pensiones</a>
</nav>
<div class="intro">
    <div class="intro_container">
        <form action="borrow.php" method="GET">
        <div>
            <label  class="intro">Cantidad solicitada</label>
            <input type="number" min="1" value="1000" name="cantidad" id="cantidad">
        </div>
        <div>
            <label  class="intro">Numero de años</label>
            <input type="number" min="0" max="40" value="7" name="anyos" id="cantidad">
        </div>
        <div>
            <p>Según los siguientes conceptos, el interes puede reducirse</p>
        </div>
        <div>
            <label  class="intro">Tiene nomina domiciliada:</label>
            <select name="nomina" id="nomina"  >
                <option value="si">si</option>
                <option value="no">no</option>
            </select>
        </div>
        <div>
            <label  class="intro">Tiene recibos domiciliados:</label>
            <select name="recibo" id="recibo">
                <option value="si">si</option>
                <option value="no">no</option>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" value="Enviar ">
        </div>
        </form>
        <?php
        if (isset($_GET["cantidad"],$_GET["anyos"],$_GET["nomina"],$_GET["recibo"])){
            $cantidad = $_GET["cantidad"];
            $anyos = $_GET["anyos"];
            $nomina = $_GET["nomina"];
            $recibo = $_GET["recibo"];
            $cuota = 0;

            //Llamada a una función dentro de otra para calcular el interes
            calcular_amortizacion($cantidad, $anyos, calcularInteres($recibo,$nomina));
            }
            ?>
        </div>
    </div>
</div>


<?php
include "./includes/footer.php";
?>
