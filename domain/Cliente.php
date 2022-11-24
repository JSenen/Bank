<?php
class Cliente {

    //Atributos
    public string $nombre;
    public string $dni;

    //Constructor

    function __construct (string $nombre, string $dni){

        $this->nombre = $nombre;
        $this->dni = $dni;

    }

    public function getDatos(){
        return "Se ha creado la cuenta con los siguientes datos: <br><b>Nombre:  </b>".$this->nombre.
            "<br><b>DNI:   </b>".$this->dni."<br>";
    }

    //Metodos


}
