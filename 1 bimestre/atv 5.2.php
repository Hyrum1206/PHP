<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body bgcolor="black">
        <?php 
            $carro; $v1 = 399; $V2 = 5789;
            $soma = $v1 +$v2; $div = $soma / 2;

            switch ($div) {
                case ($div>=1 && $div<=200):
                        echo "<font color=yellow>O carro vale: $div</font>";
                        break;
                    case ($div>=201 && $div<=500):
                            echo "<font color=blue>O carro vale: $div</font>";
                            break;
                    case ($div>=501 && $div<=2000):
                            echo "<font color=green>O carro vale: $div</font>";
                            break;
                    default:
                            echo "<font color=red>O carro vale: $div";
                            break;
            }
        ?>
    </body>
</html>