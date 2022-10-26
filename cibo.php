<?php

require_once __DIR__ . "/products.php";

class cibo extends products
{
    public $animale;
    public $tipo;
    public $grammi;


    function __construct($nome, $prezzo, $quantità, $animale, $tipo, $grammi)
    {
        parent::__construct($nome, $prezzo, $quantità);
        $this->materiale = $animale;
        $this->animale = $tipo;
        $this->grandezza = $grammi;
    }

    public function showInfo()
    {
        return "Nome: $this->nome <br> Prezzo: $this->prezzo <br> Quantità: $this->quantità <br> Animale: $this->animale <br> Tipologia: $this->tipo <br> Peso: $this->grammi";
    }
}
