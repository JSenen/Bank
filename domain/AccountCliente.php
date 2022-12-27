<?php
class AccountCliente {

    //Atributos
    public string $ccc;
    public float $amount;
    public string $tipo;
    public float $deposit;
    public float $withdraw;



    public function __construct(string $ccc, float $amount, string $tipo, float $deposit = 0.0, float $withdraw = 0.0)
    {
        $this->ccc = $ccc;
        $this->amount = $amount;
        $this->tipo = $tipo;
        $this->deposit = $deposit;
        $this->withdraw = $withdraw;
    }

    public function getAccount(){
        return "Se ha creado la cuenta asociada: <br><b>CCC:  </b>".$this->ccc.
            "<br><b>SALDO INCIIAL:   </b>".$this->amount.
            "<br><b>DEL TIPO ".$this->tipo."</b>";
    }

}
