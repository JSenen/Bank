<?php
include './includes/header.php';
include './function/control_con_switch.php';
?>
<div class="intro">
    <div class="intro_container">
        <form action="calcchange.php" method="get">
            <div>
                <label>Cantidad</label>
                <input type="number" min="1" step="any" value="1" name="cantidad">
                <label for="lang">Moneda</label>
                <select name="moneda" id="moneda">
                    <option value="euro">Euros</option>
                    <option value="dolar">Dolares</option>
                    <option value="yen">Dolares</option>
                    <option value="libra">Libras</option>
                </select>
            </div>
            <input type="submit" value="Calcular" />
        </form>

            <?php
            if (isset($_GET['cantidad'],$_GET['moneda'])){
                $cantidad = $_GET['cantidad'];
                $moneda = $_GET['moneda'];

                calculo_cambio($cantidad,$moneda);
            }
            ?>
