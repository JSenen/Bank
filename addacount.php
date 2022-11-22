<?php


include "./includes/header.php";
include "./domain/Cliente.php";

?>
<div class="intro">
    <div class="intro_container">
        <form>
            <div class="intro_container">
                <div>
                    <label>Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label  class="intro_contianer_form">DNI</label>
                    <input type="text" name="dni" id="dni">
                </div>
                <div>
                    <label  class="intro_contianer_form">CUENTA</label>
                    <input type="text" name="cuenta" id="cuenta">
                 </div>
                <div>
                    <label  class="intro_contianer_form">Saldo Inicial</label>
                    <input type="text" name="saldo" id="saldo">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        <?php
        if(isset($_GET["nombre"],$_GET["dni"],$_GET["cuenta"],$_GET["saldo"])){
            $name = $_GET["nombre"];
            $dni = $_GET["dni"];
            $account = $_GET["cuenta"];
            $amount = $_GET["saldo"];
            $cliente = new Cliente($name,$dni,$account,$amount);

            echo $cliente->getDatos();
        }
        ?>
    </div>
</div>



<?php
include "./includes/footer.php";
?>


