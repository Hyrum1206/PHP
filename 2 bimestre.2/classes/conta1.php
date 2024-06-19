<?php

class Conta {
    // Propriedades da conta
    public $data_abertura;
    public $agencia;
    public $numero;
    private $saldo;

    // Construtor para inicialização das propriedades
    public function __construct($data_abertura, $agencia, $numero, $saldo) {
        $this->data_abertura = $data_abertura;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    // Método para sacar dinheiro da conta
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false; // Retornar false se não há saldo suficiente
        }
    }

    // Método para depositar dinheiro na conta
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        } else {
            return false; // Retornar false se o valor do depósito for inválido
        }
    }

    // Método para obter o saldo da conta
    public function getSaldo() {
        return $this->saldo;
    }
}

?>
