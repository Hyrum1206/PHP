<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv 6</title>
</head>
    <body bgcolor="black">
        <center>
            <?php
                $cal; $v1 = 69; $v2 = 213; $v3 = 542;
                $v4 = $v1 + $v2;
                $div = $v4/ $v3;

                switch($v4) {
                    case ($v4>=1 && $v4<=100):
                        $v4 += 800;
                        echo "<font color=green>O produto tem o valor de : $v4</font>";
                        break;

                    case ($v4>=101 && $v4<=500):
                        $v4 /= 3;
                        echo "<font color=red>O produto tem o valor de: $v4</font>";
                        break;
                    
                    case ($v4>=501 && $v4<=1000):
                        $v4 -= 300;
                        echo "<font color=blue>O produto tem o valor de: $v4</font>";
                        break;

                    default:
                        echo "<b>O produto tem valor de: $v4</b>";
                        break;
                }
            ?>
        </center>
    </body>
</html>