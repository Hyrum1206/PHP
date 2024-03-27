<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body bgcolor="black">
    <font size="5" color="white" face="Sans-serif">
        <table border 2 align="center">
            <tr>
                <td colspan="2"><center><b>Revisão questão 1</b></center></td>
            </tr>
            <tr>
                <td>
                    <?php
                        $v1 = 1800;
                        $v2 = 20;
                        $mais = $v1 + $v2;
                        $menos = $v1 - $v2;
                        $multi = $v1 * $v2;
                        $div = $v1 / $v2;

                        echo "Soma";
                        ?>
                </td>
                <td><?php echo $mais;?></td>
            </tr>
            <tr>
                <td><?php echo "Menos"; ?></td>
                <td><?php echo $menos?></td>
            </tr>
            <tr>
                <td><?php echo "Multiplicação" ?></td>
                <td><?php echo $multi ?></td>
            </tr>
            <tr>
                <td><?php echo "Divisão" ?></td>
                <td><?php echo $div ?></td>
            </tr>
            <tr>
                <td><?php echo "Resultado multiplicação imediata" ?></td>
                <td><?php echo $div *= 2; ?></td>
            </tr>
            <tr>
                <td><?php echo "Resultado subtração imediata" ?></td>
                <td><?php echo $div -= 50; ?></td>
            </tr>
            <tr>
                <td><?php echo "Resultado do decremento da soma" ?></td>
                <td><?php echo --$mais; ?></td>
            </tr>
        </table>

        <?php  
            $nome = "Hayron";
            $x = $nome;
            if($x !="Hayron"){
                echo"<center> Verdade </center><br>";
            }
            else{
                echo"<center>falso</center><br>";
            }
        ?>

    </font>
</body>
</html>