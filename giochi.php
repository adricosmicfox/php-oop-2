<?php

require_once __DIR__ . "/products.php";

class giochi extends products
{
    public $grandezza;
    public $tipoAnimale;


    function __construct($nome, $prezzo, $quantità, $grandezza, $tipoAnimale)
    {
        parent::__construct($nome, $prezzo, $quantità);
        $this->grandezza = $grandezza;
        $this->tipoAnimale = $tipoAnimale;
    }

    public function showInfo()
    {
        return "Nome: $this->nome <br> Prezzo: $this->prezzo <br> Quantità: $this->quantità <br> Dimenzione: $this->grandezza <br> Animale: $this->tipoAnimale";
    }
}
