<?php
class Cliente {

    //Atributos
    public string $nombre;
    public string $dni;
    public string $numeroCuenta;
    public float $saldo;

    //Constructor

    function __construct (string $nombre, string $dni, string $numeroCuenta, float $saldo){

        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldo;
    }

    public function getDatos(){
        return "Se ha creado la cuenta con los siguientes datos: <br><b>Nombre:  </b>".$this->nombre.
            "<br><b>DNI:   </b>".$this->dni."<br><b>CCC   </b>".$this->numeroCuenta.
            "<br><b>Saldo:   </b>".$this->saldo."<br>Pulse<a href='./Cliente.php'>aquí</a>";
    }

    //Metodos


}
