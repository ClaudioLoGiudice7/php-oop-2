<?php

class Toys extends Products
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $type;
    public $material;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        string $_price,
        string $_type,
        string $_material
    ) {
        parent::__construct($_name, $_img, $_price);
        $this->type = $_type;
        $this->material = $_material;
    }
}