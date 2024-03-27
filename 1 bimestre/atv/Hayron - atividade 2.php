<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body bgcolor="black">
    <?php
        $v1 = 2480;
        $v2 = 34;
        $Soma = $v1 + $v2;
        $Subtracao = $v1 - $v2;
        $Multiplicacao = $v1 * $v2; 
        $Divisao = $v1 / $v2;
    ?>
    <?php echo "Resultado Soma =Soma";
        echo "Resultado Subtração = $Subtracao";
        echo "Resultado Multiplicação = $Multiplicacao";
        echo "Resultado Divisao = $Divisao";
        ?>
    <center><br><br>
        <font face="Sans-serif" size="5" color="white"><b>Atividade 2<br><br>Resultados</b>
                    <table border="2" style="color: white; border-color: white;">
                <tr>
                    <td><?php echo "Resultado soma"; ?></td>
                    <td><?php echo $Soma; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Resultado subtração"; ?></td>
                    <td><?php echo $Subtracao; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Resultado multiplicação"; ?></td>
                    <td><?php echo $Multiplicacao; ?></td>
                </tr>
                <tr>
                    <td><?php echo "Resultado divisão"; ?></td>
                    <td><?php echo $Divisao; ?></td>
                </tr>
                <tr>
                    <td><?php $Soma += 60; echo "Valor após fazer soma imediata com 60"; ?></td>
                    <td><?php echo $Soma; ?></td>
                </tr>
                <tr>
                    <td><?php $Multiplicacao *= 4; echo "Valor após fazer multiplicação imediata com 4" ?></td>
                    <td><?php echo $Multiplicacao; ?></td>
                </tr>
                <tr>
                    <td><?php ++$Subtracao; echo "Valor após incremento da subtração"?></td>
                    <td><?php echo $Subtracao; ?></td>
                </tr>
            </table>
        </font>
    </center>
</body>
</html>