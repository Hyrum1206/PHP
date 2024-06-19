<?php

// Incluir a definição da classe Conta
include_once 'classes/conta1.php';

// Criar um objeto Conta
$c1 = new Conta("10/05/2010", "1867-8", "1212-12", 5000);

// Exibir informações iniciais da conta
echo "<br><br><I>SALDO ATUAL BANCÁRIO</I><br><br>";
echo "<B>Diego Gomes</B> conta:<B>$c1->numero </B> Tem o saldo de R$ <B>{$c1->getSaldo()}</B>";

// Realizar um saque
if ($c1->sacar(1500)) {
    echo "<br><br><I>SALDO ATUAL BANCÁRIO APÓS SAQUE</I><br><br>";
    echo "<B>Diego Gomes</B> conta:<B>$c1->numero </B> Tem o saldo de R$ <B>{$c1->getSaldo()}</B>";
} else {
    echo "<br><br>Erro: Saldo insuficiente para o saque.";
}

// Realizar um depósito
if ($c1->depositar(2500)) {
    echo "<br><br><I>SALDO ATUAL BANCÁRIO APÓS DEPÓSITO</I><br><br>";
    echo "<B>Diego Gomes</B> conta:<B>$c1->numero </B> Tem o saldo de R$ <B>{$c1->getSaldo()}</B>";
} else {
    echo "<br><br>Erro: Valor de depósito inválido.";
}

?>
