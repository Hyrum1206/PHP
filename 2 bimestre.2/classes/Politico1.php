<?php
// Definição da classe Politico1

class Politico1 {
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function mostrarDetalhes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }

    public function diminuirSalario($valor) {
        $this->salario -= $valor;
        if ($this->salario < 0) {
            $this->salario = 0;
        }
        echo "O salário foi reduzido em R$ " . number_format($valor, 2, ',', '.') . "<br>";
    }
}
?>
