<?php

    include "./includes/header.php";
    include "./domain/Cliente.php";

    $cliente = new Cliente();
    $cliente->nombre = "Juan Senen";
    $cliente->dni = "1234567A";
    $cliente->numeroCuenta = "A123";
?>
<p>Cliente <?php var_dump($cliente); ?></p>
</body>
</html>