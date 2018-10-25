<?php

    include "conexao.inc";

    $vnome = "lucas";
    $vuser = "sdf";
    $vsenha = 33333;
    $email = "lucase@gmail.com";
    $vtel = 5553535535;
    $vst = 1;
    $vobs = "tudo ok";

    $sql = "INSERT INTO tb_cadastro VALUES (NULL,'$vnome','$vuser','$vsenha','$email','$vtel',$vst,'$vobs')";
    $res = mysqli_query($conexao,$sql);
    
    $num = mysqli_affected_rows($conexao);
    echo "$num Registro inserido";

    mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>