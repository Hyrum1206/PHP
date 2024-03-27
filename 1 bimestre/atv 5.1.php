<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="black">
    <?php 
        $idade = "18";
        switch ($idade) {
            case ($idade>=8 && $idade<=15):
                    echo "<font color=green>Individuo estuda no ensino fundamental e sua idade é: $idade</font>";
                    break;
                case ($idade>=16 && $idade<=20):
                        echo "<font color=lightblue>Individuo estuda no ensino médio e sua idade é: $idade</font>";
                        break;
                case ($idade>=21 && $idade<=30):
                        echo "<font color=red>Individuo estuda na faculdade e sua idade é: $idade</font>";
                        break;
                case ($idade> 30):
                        echo "<font color=cyan>Individuo estuda é graduado e sua idade é: $idade</font>";
                        break;
                default:
                        echo "Idade inválida!";
                        break;
        }
    ?>
</body>
</html>