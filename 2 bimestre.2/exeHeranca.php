<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        include_once 'classes/pessoa1.php';
        include_once 'classes/conta1.php';
        include_once 'classes/ContaPoupanca.php';
        include_once 'classes/ContaCorrente.php';

        $p1 = new Pessoa ("001", "Hayron Neves", 1.81, 19, 3123, 04); 
        $cp1 = new contaPoupanca("10/05/2010","1867-8","1212-12", 5000, 25); 
        $cc1 = new contaCorrente("10/05/2013","1867-8","1212-12", 4000, 200);

        echo "<br><br> Saldo atual <br>";

        echo "$p1 -> nome conta poupança:$cp1->numero tem o saldo de R$ $cp1->$saldo <br>";
        echo "$p1 -> nome conta corrente:$cc1->numero tem o saldo de R$ $ccl->saldo";

        echo "<br>br> Saldos depois de saques<br><br>";

        $cpl->Sacar (1500);
        echo "$pi->nome conta poupança:$cp1->numero tem o saldo de R$ $cp1->$saldo<br>";

        $cc1->Sacar(500);
        echo "$p1->nome conta corrente:$cc1->numero tem o saldo de R$ $cc1->saldo<br>";
        ?>
</body>
</html>