<?php
function mostrar_criptomonedas(){
    $cripto = [
        1=>[
            'Nombre'=>'BITCOIN',
            'Valor'=>18900,
            'Unidades'=>12000000,
        ],
        2=>[
            'Nombre'=>'ETHERUM',
            'Valor'=>9623,
            'Unidades'=>9457890
        ],
        3=>[
            'Nombre'=>'CARDANO',
            'Valor'=>127,
            'Unidades'=>11000002
        ]
    ];
    ?>
    <div class="intro">
        <div class="intro_container">
    <?php
    for ($i=1; $i<=count($cripto); $i++){
        echo '<div>';
        echo "<p>Moneda: ".$cripto[$i]['Nombre']." Valor:".$cripto[$i]['Valor'].'      Unidades en venta: '.$cripto[$i]['Unidades'].'</p>';
        echo '</div>';
    }
?>
        </div>
    </div>
<?php
}
?>