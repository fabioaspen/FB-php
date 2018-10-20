<?php

    $vet = array("Mouse","Teclado","Monitor","Mémoria","Sair","microfone","impressora");
    $tam = count($vet);

    echo "Loop while<br><br>";

    $i = 0;
    while ($i < $tam) {
        echo "$vet[$i]<br>";
        $i++;

        if ($vet[$i] == "Sair") {
            break;
        }
    }

    echo "<hr>";
    echo "Loop Do While<br><br>";
    
    $i = 0;
    do{
        echo "$vet[$i]<br>";
        $i++;

        if ($vet[$i] == "Sair") {
            break;
        }
    }while ($i < $tam);

    echo "<hr>";
    echo "Loop For<br><br>";

    for($i = 0; $i < $tam; $i++){
        if($vet[$i] == "Sair"){
            break;
        }
        echo "$vet[$i]<br>";
    }

    echo "<hr>";
    echo "Loop Foreach<br><br>";

    foreach ($vet as $pc) {
        if ($pc == "Sair") {
            break;
        } 
        echo "$pc<br>";
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