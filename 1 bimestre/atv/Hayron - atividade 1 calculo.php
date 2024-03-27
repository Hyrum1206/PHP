<!DOCTYPE html>
<head>
    <title>Atividade</title>
</head>

<body>

    <br><br><br><br><br>
        <center>
            <font face="arial">
                <h1>Atividade 1</h1>
                <h3>Hayron R. Neves</h3>
            </font>
        </center>
    
        <table border="2" align="center">
            <tr>
                <td>Subtração</td>
                <td>
                    <?php
                    $nun1 = 50; 
                    $nun2 = 100;
                    $nun3 = 150;
                    $nun4 = 200; 
                    $div = 2;

                    $Subtracao = $nun4 - $nun1; //150
                    $Multiplicacao = $nun1 * $nun3; // 7500
                    $Soma = $nun2 + $Multiplicacao; // 7600
                    $Divisao = $Soma / $div; // 3800
                    $op = $Divisao + $Subtracao * $div; //4100

                    echo $Subtracao;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Multiplicação</td>
                <td>
                    <?php
                    echo $Multiplicacao;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Soma</td>
                <td>
                    <?php
                    echo $Soma;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Divisão</td>
                <td>
                    <?php
                    echo $Divisao;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Operação</td>
                <td>
                    <?php
                    echo $op;
                    ?>
                </td>
            </tr>
        </table>
</body>

</html>
