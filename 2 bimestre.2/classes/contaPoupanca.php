<?php 
    class ContaPoupanca extends Conta{
        public $datarentabilidade;

        //criando o constructor
        function __construct($dat, $age, $num, $sal, $ren){
            parent::__construct($dat, $age, $num, $sal);
            $this->datarentabilidade = $ren;
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
    }
?>