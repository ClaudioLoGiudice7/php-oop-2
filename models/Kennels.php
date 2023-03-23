<?php

class Kennels extends Products
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $material;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        string $_price,
        string $_material
    ) {
        parent::__construct($_name, $_img, $_price);
        $this->material = $_material;
    }
}