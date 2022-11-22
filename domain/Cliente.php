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
        return "Nombre: ".$this->nombre." DNI:".$this->dni." CCC".$this->numeroCuenta." Saldo:".$this->saldo;
    }
    //Metodos


}
