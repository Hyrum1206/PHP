<?php
    class Pessoa{
         // Atributos publicos
        public $codigo;
        public $nome;

         //criar metodos
        function ImprimirValores(){
            echo "Codigo : $this->codigo <br>";  
            echo "Nome : $this->nome <br><br>";
            }
    }

?>