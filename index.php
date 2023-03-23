<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

-L'e-commerce vende **prodotti** per animali.

-I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.

-I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

-Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il
tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

class Products
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
        $this->name = $_img;
        $this->name = $_price;
    }
}

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TITLE -->
    <title>PHP OOP Extends</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="./js/app.js" defer></script>
</head>

<body>
    <header>

    </header>

    <main>

    </main>

    <footer>

    </footer>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>