<?php

    include "./includes/header.php";
    include "./domain/Cliente.php";

    $cliente = new Cliente('Juan','25252525Q','AD345',2400);

?>
<p>Cliente <?php echo 'Nombre: '.$cliente->nombre; ?></p>
</body>
</html>