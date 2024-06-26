<?php 
    class imoveis { 
        public $Tipo;
        const tamanho = "40 mts";
    }

    class SubImovel extends imoveis{
        const valor = 50000;

        function __construct($cliente, $imovel){
            echo "<br> O(a) cliente <font color=blue>$cliente</font> comprou o imovel
            <font color=blue>$this-> tipo = $imovel</font> de tamanho".self::tamanho"e custa";
        }
    }
?>