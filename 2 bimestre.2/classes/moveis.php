<?php
// Definindo a classe Moveis
class Moveis {
    // Atributos da classe
    public $Tipo;
    public $Tamanho;
    public $Peso;
    public $Preco;
    
    // Construtor da classe
    public function __construct($tipo, $tamanho, $peso, $preco) {
        $this->Tipo = $tipo;
        $this->Tamanho = $tamanho;
        $this->Peso = $peso;
        $this->Preco = $preco;
    }
    
    // Método para imprimir os valores dos atributos
    public function imprimir() {
        echo "Tipo: {$this->Tipo}, Tamanho: {$this->Tamanho}, Peso: {$this->Peso}, Preço: {$this->Preco} <br>";
    }
    
    // Método para aumentar o tamanho do móvel
    public function aumentarTamanho($novaMedida) {
        $this->Tamanho = $novaMedida;
    }
}
?>
