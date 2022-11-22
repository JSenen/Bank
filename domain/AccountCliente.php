<?php
class AccountCliente{

    //Atributos
    private string $ccc;
    private string $name;
    private amount $amount;


    public function __construct(string $name, string $ccc, amount $amount)
    {
        $this->name = $name;
        $this->ccc = $ccc;
        $this->amount = $amount;
    }
}
