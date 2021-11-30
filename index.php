<?php
require_once "Cachorro.php";
require_once "canino.php";
require_once "animal.php";
require_once "lobo.php";
require_once "raposa.php";
//require_once "pet.php";

    $c = new Cachorro();
    /*$c->setId(1);
    echo $c->getId();
    echo "\n";
    $c->setPeso(90.0);
    echo $c->getPeso();
    echo "\n";*/
    //$c->fazerBarulho();
    $c->cobrarFocinheira();
    $l = new Lobo();
    $l->cobrarFocinheira();
    $r = new Raposa();
    echo "Raposa:\n";
    $r->setId(1);
    echo $r->getId();
    $r->cobrarFocinheira();
    echo "\nNúmero de instâncias:\n";
    echo Animal::$contador;
    echo "\n";
    Animal::mostraClassePai($r);


?>