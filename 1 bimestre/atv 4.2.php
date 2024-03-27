<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="black">
    <font color="white" size="5"><center>
        <?php 
            $v1 = 4;
            $v2 = 6;
            $v3 = 9;

            $multi = $v2 * $v3;

            if($multi>=500){
                echo "<font color=blue>Maior</font>";
            }
            else{
                if($multi<=500){
                    echo "Menor";
                }
            }

        ?>
    </center></font>

    <?php 
        $x = 14;
        $y = 16;
        $z = 19;
        
        if($x>10 || $y <= 5 && $z ==7 ){
            echo "<center>Verdadeiro</center>";
        }
        else{
            echo"<center>Falso</center>";
        }
    ?>

    <?php 
        $v1 =12;
        $v2 =2;

        if($v1>=10 || $v2>2){
            echo "igual";
        }
        else($v2){

        }

    ?>

</body>
</html>