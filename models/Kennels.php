<?php

class Kennels extends Products
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $material;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        int $_price,
        string $_material
    ) {
        parent::__construct($_name, $_img, $_price);
        $this->material = $_material;
    }
}

$Kennels1 = new Kennels("Canile in Legno Coibentato Lux", "../img/canile_in_legno_coibentato_lux.png", round(141.40), "Legno");
$Kennels1 = new Kennels("Cuccia Outdoor Rettangolare Blu", "../img/cuccia_outdoor_rettangolare_blu.png", round(34.78), "Poliestere");
$Kennels1 = new Kennels("Siesta Deluxe Dark Grey", "../img/siesta_deluxe_dark_grey.png", round(46.99), "Plastica");