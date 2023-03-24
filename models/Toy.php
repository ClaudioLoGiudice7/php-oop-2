<?php

class Toy extends Product
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $type;
    public $material;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        int $_price,
        string $_type,
        string $_material
    ) {
        parent::__construct($_name, $_img, $_price);
        $this->type = $_type;
        $this->material = $_material;
    }
}

$toy1 = new Toy("Topo con Pallina", "../img/topo_con_pallina.png", round(3.10), "Peluche", "Stoffa");
$toy2 = new Toy("Gioco per Cane", "../img/gioco_per_cane.png", round(7.50), "Palla", "Gomma");
$toy3 = new Toy("Gioco per Cane Corda Osso", "../img/gioco_per_cane_corda_osso.png", round(4.13), "Corda", "Cotone");