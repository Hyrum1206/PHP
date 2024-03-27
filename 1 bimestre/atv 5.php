<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body bgcolor="black">
        <center><font color="white">
            <?php 
                $apple = 13;
                $pera = 12;
                $maça = 13;
                $uva = 14;
                $banana = 19;
                if($apple==$pera){
                    echo "<img src= https://images.tcdn.com.br/img/img_prod/450860/muda_de_pera_d_agua_ou_europeia_1m_enxertada_676_1_20190611093602.jpg";
                }
                else{
                    if($apple == $maça){
                        echo "<img src=https://acdn.mitiendanube.com/stores/746/397/products/maca-argentina1-a86acef532d11addf315221676880019-480-0.webp>";
                    }
                    if($apple == $uva) {
                        echo "<img src=https://acdn.mitiendanube.com/stores/001/254/392/products/frutas_hortifruti_hortifit_delivery_uva_vitoria1-ad4c6723703492d7a816932215080810-640-0.png>";
                    }
                    if($apple == $banana){
                        echo "<img src= https://images.educamaisbrasil.com.br/content/banco_de_imagens/guia-de-estudo/D/banana-da-prata.jpg>";
                    }
                    else{
                        echo "frunta não encontrada";
                    }
                }  
            ?>
        </font></center>
    </body>
</html>