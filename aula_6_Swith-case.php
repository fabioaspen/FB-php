<?php

    $opc = 3; // 1: carro - 2: moto - 3: bivivleta - 4: barco - 5: Avião

    switch ($opc) {
        case 1:
            echo "Carro";
            break;
        
        case 2:
            echo "Moto";
            break;
        
        case 3:
            echo "Bicicleta";
            break;
        
        case 4:
            echo "Barco";
            break;
        case 5:
            echo "Avião";
            break;
        
        default:
            echo "Opção invalida";
            break;
    }
        
    echo "<hr>";

    switch ($opc) {
        case ($opc <= 3  && $opc > 0);
            echo "Transporte terestre";
            break;
        case 4:
            echo "Transporte maritimo";
            break;
        case 5:
            echo "Transporte Aério";
            break;
    }

    ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>