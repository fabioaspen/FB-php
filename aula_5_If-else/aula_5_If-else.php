<?php

    //IF-Else 

    $nota = 70;

    if($nota >= 70){
        echo "<font color = blue>Aprovado<font>";
    }else if($nota >= 50){
        echo "<font color=orange>Recuperação<font>";
    }else{
        echo "<font color=red>Reprovado<font>";
    }
    
    if(($nota >= 40) && ($nota <= 60)){
        echo "<hr> Aluno selecionado";
    }else{
        echo "<hr> Aluno fora da faixa";
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