<?php

    $dia = date("d");
    $mes = date("m");
    $ano = date("Y"); //y menusculo retorna o valor com 4 digitos

    $meses = array("jan","fev","mar","abril","maio","jun","julh","ago","nov","out","set","dez");

    $hora = date("H"); //h minusculo formato de 12 horas
    $minuto = date("i");
    $segundo = date("s");

    echo $dia." de ".$meses[$mes-1]." de ".$ano."<br>";
    echo $hora." : ".$minuto." : ".$segundo;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>