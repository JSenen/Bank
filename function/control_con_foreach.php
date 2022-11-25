<?php
function mostrar_acciones(){
    $acciones = array(
        'Acciona'=>23.4,
        'Iberdrola'=>120.5,
        'Acerinox'=>133.07,
        'Acs'=>12.4,
        'Aena'=>124.5,
        'Iberdrola'=>167.8,
    );
    ?>
    <div class="intro">
    <div class="intro_container">
    <?php
    foreach ($acciones as $accion => $valor)
    {
        echo '<div>';
        echo '<p>'.$accion.' último valor ='.$valor.'<p>';
        echo '</div>';
    }
    ?>
        </div>
    </div>
<?php
}
?>