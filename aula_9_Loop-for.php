<?php

    $i = 0;
    $tam = 5;
    $vet = array($tam);
    
    for ($i=0; $i < $tam; $i++) { 
        echo "Valor de i: $i<br>";
    }

    echo "<br>";

    for($i = 0; $i < 50;$i++){
        echo "-";
    }

    echo "<br><br>";

    for($i = 0; $i < $tam;$i++){
        $vet[$i] = 0;
    }

    for($i = 0; $i < $tam;$i++){
        echo "Valor da pos $i: $vet[$i]<br>";
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