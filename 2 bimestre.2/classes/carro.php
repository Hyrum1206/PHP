<?php
class Carro{

    const $marca1 = "<font color=blue>Chevrolet</font>";
    public $marca2 = "Fiat";

}
class Modelo extends Carro{
    const carro1 = "Celta";
    const carro2 = "Camaro";

    function __construct($comprador){
        echo $comprador." vendeu um carro".self::carro1."e comprou um ".self::carro2."de marca".parent::marca1."<br>";
    }
}
?>