<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ExePolíticos</title>
</head>
<body>
    <?php
        include 'classes/politico1.php';

        $politico1 = new Politico1("Irineu", "Vereador municipal", 1000);

        echo "<b>Detalhes do político 1 antes da operação:</b><br><br>";
        $politico1->mostrarDetalhes();
        echo "<br><br>";
        
        // diminuir o salário
        echo "<b>Diminuir salário do político 1:</b><br><br>";
        $politico1->diminuirSalario(500);
        echo "<br><br>";
        
        echo "<b>Detalhes do político 1 após a operação:</b><br><br>";
        $politico1->mostrarDetalhes();
        echo "<br><br>";
    ?>
</body>
</html>
