<?php 
    class ContaPoupanca extends Conta{
        public $limite;

        //criando o constructor
        function __construct($dat, $age, $num, $sal, $lim){
            parent::__construct($dat, $age, $num, $sal);
            $this->limite = $lim;
        }
        function Sacar($valor){
            parent::Sacar($valor);{
                if($this->saldo >= $valor){
                    parent::Sacar($valor);
                }
                else{
                    echo "<font color=red>Saldo insuficiente</font><br>";
                    return false;
                }
                return true;
            }
        }
        function Depositar($valor){
            parent::Depositar($valor);{
                if($this->saldo + $valor <= $this->limite){
                    parent::Sacar($valor);
            }
                else{
                    echo "<font color=red>Limite excedido</font><br>";
                    return false;
            }
        }
    }
}
?>