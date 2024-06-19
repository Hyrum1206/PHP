<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe 1</title>
</head>
    <body>
        <?php 
            // incluir classe
            include_once 'classes/pessoa1.php';
        
            //cria objetos
            $p = new Pessoa;

            //atribuir valores
            $p1->codigo = "001";
            $p1->nome = "Hayron Neves";

            $p1->ImprimirValores();
        ?>
    
    </body>
</html>