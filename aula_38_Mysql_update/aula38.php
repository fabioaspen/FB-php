<?php

    include "conexao.inc";

    $sql = "UPDATE tb_cadastro SET telefone='33333333' WHERE cod = 1";
    $res = mysqli_query($conexao,$sql);

    if($res){
        echo "Registro atualizado com sucesso";
    }else {
        echo "ERRO na atualização doregistro";
    }

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