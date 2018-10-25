<?php

    include "conexao.inc";

    $res = mysqli_query($conexao,"SELECT * FROM tb_cadastro");
    $linhas = mysqli_num_rows($res);
    echo "Encontrados $linhas registro na tabela tb_cadastro";

    mysqli_close($conexao);

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