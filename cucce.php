<?php

require_once __DIR__ . "/products.php";

class cucce extends products
{
    public $materiale;
    public $grandezza;
    public $animale;
    public $esternoInterno;


    function __construct($nome, $prezzo, $quantità, $materiale, $grandezza, $animale, $esternoInterno)
    {
        parent::__construct($nome, $prezzo, $quantità);
        $this->materiale = $materiale;
        $this->animale = $animale;
        $this->grandezza = $grandezza;
        $this->esternoInterno = $esternoInterno;
    }

    public function showInfo()
    {
        return "Nome: $this->nome <br> Prezzo: $this->prezzo <br> Quantità: $this->quantità <br> Materiale: $this->materiale <br> Misura: $this->grandezza <br> Animale: $this->animale <br> Esterno/Interno: $this->esternoInterno";
    }
}
