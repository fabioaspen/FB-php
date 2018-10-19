<?php

    $i = 0;
    $tam = 5;
    $vet = array($tam);

    while ($i < $tam) {
        echo "Valor da variavel i: $i<br>";
        $i++;
    }

    echo "<hr>";

    $i=0;
    while ($i < $tam) {
        $vet[$i] = "PHP $i";
        $i++;
    }

    $i = 0;
    while ($i < $tam) {
        echo $vet[$i]."<br>";
        $i++;
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