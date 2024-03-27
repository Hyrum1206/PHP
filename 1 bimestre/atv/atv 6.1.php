<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>revisão 2</title>
</head>
    <body>
        <?php 
            $v1 = 1000; $v2 = 400; $v3 = 2;
        ?>
        <center>
            <table border="2">
                <tr>
                    <td colspan="2"><font color="red"><b><center>Exercício de Revisão</center></b></font></td>
                </tr>
                    <td><font color="blue"><b><center>Soma Total:</center></b></font></td>
                    <td><?php $soma = $v1 + $v2 + $v3; echo "<center>$soma</center>"; ?></td>
                </tr>
                <tr>
                    <td><font color="blue"><b><center>Subtração total:</center></b></font></td>
                    <td><?php $soma -= 150;  echo "<center>$soma</center>"; ?></td>
                </tr>
                <tr>
                    <td><font color="blue"><center><b>Imagem</b></center></font></td>
                    <td><center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEP0O9hjuegwThiY20nvv5K8cOWyzf08FSEI8NeUUQHg&s" alt="IFTO"></center></td>
                </tr>
                <tr>
                    <td><font color="blue"><b><center>Incremente</center></b></font></td>
                    <td><?php ++$soma; echo "<center>$soma</center>" ?></td>
                </tr>
            </table>
        </center>
    </body>
</html>