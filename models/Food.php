<?php

class Food extends Products
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $consistency;
    public $expiry_date;
    public $flavour;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        string $_price,
        string $_consistency,
        string $_expiry_date,
        string $_flavour
    ) {
        parent::__construct($_name, $_img, $_price);
        $this->consistency = $_consistency;
        $this->expiry_date = $_expiry_date;
        $this->flavour = $_flavour;
    }
}