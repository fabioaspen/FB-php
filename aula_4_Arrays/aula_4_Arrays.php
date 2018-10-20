<?php

    //Arrays
    $vet = array(7);
    $vet2 = array("nome"=>"Bruno","cidade"=>"BH","curso"=>"PHP");

    //Matriz
    $mat = array(
        array("carro1",56000), 
        array("carro2",34999),
        array("carro3",3400)
    );

    echo "Carro A: ".$mat[0][0]." - valor: ".$mat[0][1]."<br>";
    echo "Carro B: ".$mat[1][0]." - valor: ".$mat[1][1]."<br>";
    echo "Carro C: ".$mat[2][0]." - valor: ".$mat[2][1]."<hr>";
    
    $vet[0]="carro";
    $vet[1]="Avião";
    $vet[2]="Navio";
    $vet[3]="Moto";
    $vet[4]="Onibus";
    $vet[5]="123455";
    $vet[6]=$vet2["nome"];

    echo $vet[6]."<br>";
    echo "Nome: ".$vet2["nome"]." - Cidade: ".$vet2["cidade"]." - Curso: ".$vet2["curso"]."<br>";

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