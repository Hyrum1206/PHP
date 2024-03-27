<!DOCTYPE html>
<html>

<head>
    <title>Tabela com Resultados</title>
</head>

<body>

    <table border="2">
        <tr>
            <td>Subtração</td>
            <td id="2">
                <?php
                $nun1 = 5;
                $nun2 = 10;
                $nun3 = 15;
                $nun4 = 20;
                $div = 2;

                $Subtracao = $nun4 - $nun1;
                $Multiplicacao = $nun1 * $nun3;
                $Soma = $nun2 + $Multiplicacao;
                $Divisao = $Soma / $div;

                echo $Subtracao;
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
            <td>Multiplicação</td>
            <td>
                <?php
                echo $Multiplicacao;
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
    </table>

</body>

</html>
