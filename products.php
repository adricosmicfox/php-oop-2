<?php

class products
{
    public $nome;
    public $prezzo;
    public $quantità;

    function __construct($nome, $prezzo, $quantità)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
    }

    public function showInfo()
    {
        return "Nome: $this->nome <br> Prezzo: $this->prezzo <br> Quantità: $this->quantità";
    }
}
