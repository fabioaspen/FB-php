<?php

    function aula(){
        echo "<hr>Olá mundo <br>";
        echo "Aula sobre functions <hr>";
    }
    aula();

    function soma($n1 ,$n2){
        $res = $n1 + $n2;
        echo "<br>Soma de $n1 com $n2 = $res<br>";
    }
    soma(5,20);
    
    
    function soma2($n1 ,$n2){
        $res = $n1 + $n2;
        return $res;
    }
    $so = soma2(10,34);
    echo "<br>Resultado = $so<br>";

    $valores = array(1,2,3,4,5,6,7,8);
    function media($val){
        $tam = count($val);
        $soma = 0;
        for($i = 0;$i < $tam; $i++){
            $soma+=$val[$i];
        }
        return $soma/$tam;
    }
    $media = media($valores);
    echo "<hr>Media = $media ";


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