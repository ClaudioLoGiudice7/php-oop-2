<?php

class Food extends Products
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $consistency;
    public $flavour;

    // all'interno della classe è definito un costruttore
    function __construct(
        string $_name,
        string $_img,
        int $_price,
        string $_consistency,
        string $_flavour
    ) {
        parent::__construct($_name, $_img, $_price);
        $this->consistency = $_consistency;
        $this->flavour = $_flavour;
    }
}

$food1 = new Food("Stuzzy Dog Monoproteico", "../img/stuzzy_dog.png", round(3.75), "Umido", "Manzo");
$food2 = new Food("Monge Grill Dog Adult", "../img/monge_grill_dog_adult.png", round(0.66), "Bocconcini", "Pollo e Tacchino");
$food3 = new Food("Virtus Cat Adult Natural", "../img/virtus_cat_adult_natural.png", round(1.69), "Umido", "Tonno con manzo e Prosciutto di pollo");