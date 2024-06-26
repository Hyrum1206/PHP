<?php

    include_once 'classes/pessoa1.php';
    include_once 'classes/contal.php';
    include_once 'classes/ContaCorrente.php';

    $p1 = new Pessoa ("001", "Hayron Neves", 1.81,30,4000,58);
    $conta = new Conta("11/04/2022","000-0", "2212-12", 5000);

    echo "Saldo atual <br><br>";
    echo "$p1->nome ten o saldo atual de R$ $conta->saldo"

?>