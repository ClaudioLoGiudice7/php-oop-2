<?php

class Category
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $name;

    // all'interno della classe è definito un costruttore
    function __construct(string $_name)
    {
        $this->name = $_name;
    }
}

$category1 = new Category("Cat");
$category2 = new Category("Dog");