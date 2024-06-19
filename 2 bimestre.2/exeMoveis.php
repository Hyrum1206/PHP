<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'classes/Moveis.php';
        
        // Criando objetos da classe Moveis
    $movel1 = new Moveis("Cadeira", "Pequeno", "5 kg", "100");
    $movel2 = new Moveis("Mesa", "Médio", "20 kg", "300");
    $movel3 = new Moveis("Sofá", "Grande", "40 kg", "500");
    $movel4 = new Moveis("Escrivaninha", "Médio", "15 kg", "250");
    $movel5 = new Moveis("Cama", "Grande", "35 kg", "450");

    // Imprimindo os valores iniciais dos objetos
    echo "Valores iniciais dos móveis: <br>";
    $movel1->imprimir();
    $movel2->imprimir();
    $movel3->imprimir();
    $movel4->imprimir();
    $movel5->imprimir();

    echo "<br>";

    // Utilizando o método aumentarTamanho para aumentar a largura de dois móveis
    $movel2->aumentarTamanho("Grande");
    $movel5->aumentarTamanho("Enorme");

    // Imprimindo os valores após aumentar o tamanho de dois móveis
    echo "Valores dos móveis após aumentar o tamanho: <br>";
    $movel1->imprimir(10);
    $movel2->imprimir(25);
    $movel3->imprimir(30);
    $movel4->imprimir(35);
    $movel5->imprimir(40);
    ?>

</body>
</html>