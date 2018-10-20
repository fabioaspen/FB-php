<?php

    //variaveis 
    $vnome = "bruno";
    $vnum = 10;
    $vnum2 = 20.5;
    $vsoma = 0;

    echo"nome: $vnome<br>";
    $vnome = "campos";
    echo "Nome: $vnome<br>";
    $vnome = "bruno";
    echo "Nome: ".$vnome."<br>";
    $vsoma = 10 + 20;
    echo "Soma: $vsoma<br>";

    echo "<hr>";

    //constantes
    define("cnome","bruno");
    define("ver",PHP_VERSION);
    define("dir",__DIR__);

    echo "constante cnome: ".cnome."<br>";
    echo "Nome arquivo: " .__FILE__."<br>";
    echo "Versão do PHP: " .ver."<br>";
    echo "Pasta: " .dir."<br>";

    echo "Versão do SO: ".PHP_OS."<br>";
    echo "Numero da linha: ".__LINE__."<br>";

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