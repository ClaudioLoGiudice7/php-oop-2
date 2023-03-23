<?php

class Categories
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $name;

    // all'interno della classe è definito un costruttore
    function __construct(string $_name)
    {
        $this->name = $_name;
    }
}

$categories1 = new Categories("Cat");
$categories2 = new Categories("Dog");