<?php

class Product
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $name;
    public $img;
    public $price;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        int $_price,
    ) {
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
    }
}