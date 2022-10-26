<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Bonus:
Definire la carta di credito come classe e associarla all'utente -->


<?php

require_once __DIR__ . "/cibo.php";
require_once __DIR__ . "/giochi.php";
require_once __DIR__ . "/cucce.php";

// prodotti
$palla = new giochi("Palla Bongo", "9.99", "1", "piccola", "cane");
$corda = new giochi("TiraLa Fune", "5.99", "1", "corta", "cane");
$piuma = new giochi("Piumetta", "7.99", "1", "piccola", "gatto");

$cucciaCane = new giochi("Cuccia legno", "99.99", "1", "Legno", "Media", "Cane", "Esterno");
$cucciaGatto = new giochi("Cuscino Soft", "19.99", "1", "Cotone", "Piccola", "Gatto", "Interno");

$ciboSeccoCane = new cibo("Crocchette King", "8.99", "2 sacchetti", "Cane", "Cibo secco", "2000g");
$ciboUmidoCane = new cibo("Cibo King", "6.99", "4 scatolette", "Cane", "Cibo umido", "300g");
