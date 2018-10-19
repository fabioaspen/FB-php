<?php

    $transp = array("carro","moto","bicicleta","Avião","Navio","ônibus");

    foreach ($transp as $veiculo) {
        echo "$veiculo<br>";
        /*
        if($veiculo == "bicicleta"){
            break;
        }*/
    }

    echo "<hr>";

    foreach($transp as $veiculo){
        if($veiculo == "moto"){
            echo "Moto esta na lista";
        }
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