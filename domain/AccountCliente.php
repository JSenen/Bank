<?php
class AccountCliente {

    //Atributos
    private string $ccc;
    private string $amount;
    private string $tipo;



    public function __construct(string $ccc, string $amount, string $tipo)
    {
        $this->ccc = $ccc;
        $this->amount = $amount;
        $this->tipo = $tipo;
    }

    public function getAccount(){
        return "Se ha creado la cuenta asociada: <br><b>CCC:  </b>".$this->ccc.
            "<br><b>SALDO INCIIAL:   </b>".$this->amount.
            "<br><b>DEL TIPO ".$this->tipo."</b>";
    }

}
